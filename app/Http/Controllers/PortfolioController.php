<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

            // Send email (configure mail settings in .env)
            // For now, just log the contact
            Log::info('Portfolio Contact Form Submission:', $validated);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! I will get back to you soon.'
            ]);

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Sorry, something went wrong. Please try again.'
            ], 500);
        }
    }
}
