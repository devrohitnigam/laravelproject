<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Save to DB
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Send Email
        Mail::raw(
            "Name: ".$request->name."\nEmail: ".$request->email."\nPhone: ".$request->phone."\nMessage: ".$request->message,
            function($message) {
                $message->to('rohitkumarnigam9568@gmail.com')
                        ->subject('New Contact Form Message');
            }
        );

        return back()->with('success', 'Message sent successfully!');
    }
}