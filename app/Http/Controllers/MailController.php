<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $subjectMail = $request->subject;
        $msg = $request->message;

        $mail = new ContactMailable($name, $email, $subjectMail, $msg);
        Mail::to('carlos.conto.336@gmail.com')->send($mail);

        return redirect()->back()->with(["success" => "Su mensaje se ha envíado con exíto!"]);
    }
}
