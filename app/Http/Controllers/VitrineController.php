<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function index(){
        return view('vitrine.index');
    }
    public function about(){
        return view('vitrine.about');
    }
    public function contact(){
        return view('vitrine.contact');
    }
    public function feature(){
        return view('vitrine.feature');
    }
    public function service(){
        return view('vitrine.service');
    }
    public function confirm(){
        return view('vitrine.confirm');
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
