<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryEmail;

class ContactController extends Controller
{
   
        function sendEmail(){
            $to="komal.jim.mca.2022@gmail.com";
            $msg="dumy mail";
            $subject="code";
        
        Mail::to($to)->send(new EnquiryEmail($msg, $subject) );
    }

}
