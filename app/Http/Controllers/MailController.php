<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from NG',
            'body' => 'This is for testing email using localhost.'
        ];
         
        Mail::to('ng@gmail.com')->send(new DemoMail($mailData));
           
        return "Email is sent successfully.";
    }
}
