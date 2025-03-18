<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietaireController extends Controller
{
    public function index(){
        return view('proprietaires.index');
    }
}
