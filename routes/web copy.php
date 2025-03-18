<?php
use App\Http\Controllers\ContactController;
  use App\Http\Controllers\RouteController;
  use App\Http\Controllers\ReservationController;
  use App\Http\Controllers\CommentaireController;
  use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('index');
// })->name("home");
Route::get('/home',[RouteController::class,'index'])->name("home");

// Route::get('/about', function () {
//     return view('about');
// })->name("about");
route::get('/about',[RouteController::class,'about'])->name("about");

// Route::get('/contact', function () {
//     return view('contact');
// })->name("contact");
route::get('/contact',[RouteController::class,'contact'])->name("contact");

// Route::get('/fonctionalite', function () {
//     return view('feature');
// })->name("fonctionalite");
route::get('/fonctionalite',[RouteController::class,'feature'])->name("fonctionalite");


// Route::get('/service', function () {
//     return view('service');
// })->name("service");
route::get('/service',[RouteController::class,'service'])->name("service");




route::get('/contact',[ContactController::class,'create'])->name("contact");
route::post('/contact',[ContactController::class,'store'])->name("contact");
Route::resource('/reservation', ReservationController::class,["as"=>"proprietaires"]);
Route::resource('/commentaire', CommentaireController::class,["as"=>"proprietaires"]);
Route::resource('/parking', ParkingController::class,["as"=>"proprietaires"]);


?>