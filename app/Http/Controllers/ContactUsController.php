<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //
    public function create(){
        return view('contactus');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'subject' => 'required',
            'message' => 'required'
        ]);

        $name = $formFields['name'];
        $email = $formFields['email'];
        $message = $formFields['message'];
        Mail::to('scootify.lu@gmail.com')->send(new ContactEmail($name, $email, $message));

        ContactUs::create($formFields);
        return redirect()->back()->with(
            'success', 'Thank you for contacting us, we will get back to you ASAP!'
        );       
    }
}
