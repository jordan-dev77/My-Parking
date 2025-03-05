<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
     return view('contact');
     
    }

    public function store(ContactRequest $request){

        // return view('contact');

        Mail::to('kouangajordan@gmail.com')
        ->send(new message($request->except('_token')));
        return view('confirm');
             
                
    }
    
}
