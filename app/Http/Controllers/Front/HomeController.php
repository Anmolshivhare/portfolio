<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\BookingMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Show the application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tours()
    {
        return view('tours');
    }

    /**
     * Handle booking form submission via AJAX.
     */
    public function booking(Request $request)
    {
        try {
            // 1. Validation
            $validatedData = $request->validate([
                'user_name' => 'required|string|max:255',
                'user_email' => 'required|email|max:255',
                'user_phone' => 'required|digits:10',
                'tour' => 'required|string|not_in:Select', // Added not_in:Select for the dropdown
                'message' => 'required|string',
            ]);


            // 2. Define the Admin Email Address
            $adminEmail = 'yashpalsecretagent@gmail.com';

            // 3. Send the Email
            Mail::to('info@primostravellers.com')
                ->cc($adminEmail)
                ->send(new BookingMail($validatedData));

            // 4. Return a JSON success response for the AJAX call
            return response()->json([
                'success' => true,
                'message' => 'Your booking request has been sent successfully! We will contact you shortly.'
            ], 200);
        
        } catch (Exception $exception) {
            // 5. Handle Email Sending Failure (e.g., mail driver issue)
            Log::error('Mail sending failed: ' . $exception->getMessage());

            // 6. Return a JSON error response for the AJAX call
            return response()->json([
                'success' => false,
                'message' => 'There was an issue sending your request. Please try again or contact us directly.'
            ], 500); // Use a 500 status code for server error
        }
    }
}
