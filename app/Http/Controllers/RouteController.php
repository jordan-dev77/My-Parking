<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function feature(){
        return view('feature');
    }
    public function service(){
        return view('service');
    }
    public function confirm(){
        return view('confirm');
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
