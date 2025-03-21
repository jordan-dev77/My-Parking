<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\VitrineController;
use Illuminate\Support\Facades\Route;



Route::get('/home',[VitrineController::class,'index'])->name("home");

route::get('/about',[VitrineController::class,'about'])->name("about");

route::get('/contact',[ContactController::class,'create'])->name("contact");

route::post('/contact',[ContactController::class,'store'])->name("contact");

route::get('/fonctionalite',[VitrineController::class,'feature'])->name("fonctionalite");

route::get('/service',[VitrineController::class,'service'])->name("service");




?>