<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactus(){
        return view('contactus');
    }
    public function sendmail(Request $request){
        $nome=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $contactMail = new ContactMail ($nome,$email,$password);
        Mail::to('staff@hack77.it')->send($contactMail);
        //  return redirect()->route('grazie');
        return to_route('grazie');
    }
    public function grazie(){
        return view('grazie');
    }



}
