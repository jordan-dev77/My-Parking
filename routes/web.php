<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProprietaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/homeclient', [ClientController::class, 'index'])->name('homeclient');
    route::get('/about',[ClientController::class,'about'])->name("about");
    Route::get('/contact',[ClientController::class,'contact'])->name("contact");
    Route::get('/fonctionalite',[ClientController::class,'feature'])->name("fonctionalite");
    Route::get('/service',[ClientController::class,'service'])->name("service");

});

Route::middleware('auth')->group(function () {
    Route::get('/homeproprietaire', [ProprietaireController::class, 'index'])->name('homeproprietaire');
});

require __DIR__.'/auth.php';
