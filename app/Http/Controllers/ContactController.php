<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->all();

        Mail::to('team.ajeerco@gmail.com')->send(new ContactFormMail($data));

        return back()->with('success', 'Email sent successfully!');
    }
}
