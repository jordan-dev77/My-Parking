<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
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
    public function confirm(){
        return view('clients.confirm');
    }
}
// class RouteController extends Controller
// {
//     public function about(){
//         return view('about');
//     }
// };
// class RouteController extends Controller
// {
//     public function contact(){
//         return view('contact');
//     }
// };
// class RouteController extends Controller
// {
//     public function feature(){
//         return view('feature');
//     }
// };
// class RouteController extends Controller
// {
//     public function service(){
//         return view('service');
//     }
// };
