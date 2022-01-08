<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $request->validate([
            "name"=>'required', 
            "email"=>'required|email', 
            "subject"=>'required',  
            "message"=>'required|min:100'
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'service'=>$request->service,
            'subject' => $request->subject,
            'description' => $request->message
          ]);
          return response()->json(['success'=>'Form is successfully submitted!']);
    }
}
