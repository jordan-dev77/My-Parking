<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Mail\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function create(){
     return view('clients.contact');
     
    }

    public function store(ContactRequest $request){

        // return view('contact');

        
        Mail::to('kouangajordan@gmail.com')
        ->send(new message($request->except('_token')));
        return view('confirm');
             
                
    }
    
}
