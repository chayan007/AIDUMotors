<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailer;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        Mail::to('director@aidumotors.com')->send(new ContactMailer($name, $email, $subject, $message));
        return back();
    }
}
