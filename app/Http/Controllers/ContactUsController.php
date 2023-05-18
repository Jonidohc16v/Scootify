<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

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

        ContactUs::create($formFields);
        return redirect()->back()->with(
            'success', 'Thank you for contacting us, we will get back to you ASAP!'
        );
    }
}
