<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact1;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryEmail1;

class Contact1Controller extends Controller
{
   
        function sendEmail1(){
            $to="komal.jim.mca.2022@gmail.com";
            $msg="dumy mail";
            $subject="code";
        
        Mail::to($to)->send(new EnquiryEmail1($msg, $subject) );
    }

}
