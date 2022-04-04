<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index()
    {
    	 return view('Front.career');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            "name" => "required",
            "email" => "required",
            "mobile_number" => "required",
            "dob" => "required",
            "gender" => "required",
            "qualification" => "required",
            "city" => "required",
            "state" => "required",
            "resume" => "required"
        ]);

        Career::create([
            "name" => $request->name,
            "email" => $request->email,
            "mobile_number" => $request->mobile_number,
            "dob" => $request->dob,
            "gender" => $request->gender,
            "qualification" => $request->qualification,
            "city" => $request->city,
            "state" => $request->state,
            "resume" => $request->resume->store("career/resume","public")
        ]);

        return back()->withSuccess("Thanks for apply");
    }
}
