<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email',
            'message'=>'required|string',
        ]);

        // Send email to LGU email
        Mail::raw($data['message'], function($message) use ($data){
            $message->to('info@baliangao.gov.ph')
                    ->subject('New Contact Form Message from ' . $data['name'])
                    ->replyTo($data['email']);
        });

        return back()->with('success','Your message has been sent!');
    }
}