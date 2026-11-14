<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactAdminMail;
use App\Mail\ContactThankYouMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio homepage.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Handle contact form submission via AJAX.
     */
    public function sendContact(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            $adminEmail = config('mail.admin_email');
            if (!$adminEmail) {
                throw new \RuntimeException('CONTACT_ADMIN_EMAIL is not configured.');
            }

            $adminMessage = Mail::to($adminEmail)
                ->send(new ContactAdminMail($validated));
            if ($adminMessage === null) {
                throw new \RuntimeException('Mail transport did not accept the admin notification.');
            }
            Log::info('Portfolio admin notification accepted by mail transport.', [
                'recipient' => $adminEmail,
            ]);

            $thankYouMessage = Mail::to($validated['email'])
                ->send(new ContactThankYouMail($validated));
            if ($thankYouMessage === null) {
                throw new \RuntimeException('Mail transport did not accept the thank-you message.');
            }
            Log::info('Portfolio thank-you message accepted by mail transport.', [
                'recipient' => $validated['email'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! I will get back to you soon.'
            ]);

        } catch (\Throwable $e) {
            Log::error('Contact form mail failed.', [
                'exception' => $e::class,
                'message' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Sorry, something went wrong. Please try again.'
            ], 500);
        }
    }
}
