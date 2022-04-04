<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	 return view('Front.contact');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
            
        ]);

        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message
            
        ]);

        return back()->withSuccess("Thanks for contact us. We will contact you soon..");
    }
}
