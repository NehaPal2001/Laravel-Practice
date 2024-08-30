<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }
    public  function send()
    {
        $data=request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:5',
        ]);
        \Log::info('Validation passed', $data);
        Mail::to('palneha671@gmail.com')->send(new ContactUs($data));
        
        return redirect()->back()->with('success','Message sent successfully');
    }
}
