<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('clients.index');
        }
        public function about(){
            return view('clients.about');
        }
        public function contact(){
            return view('clients.contact');
        }
        public function feature(){
            return view('clients.feature');
        }
        public function service(){
            return view('clients.service');
    }
}
