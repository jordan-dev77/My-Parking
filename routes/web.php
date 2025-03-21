<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\ClientReservationController;
use App\Http\Controllers\ParkingController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/vitrine.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/homeclient', [ClientController::class, 'recherche'])->name('homeclient');
    Route::get('/contact',[ClientController::class,'contact'])->name("contact");
    Route::resource('/reservation', clientReservationController::class,["as"=>"clients"]);
    
});

Route::middleware('auth')->group(function () {
    Route::get('/homeproprietaire', [ProprietaireController::class, 'index'])->name('homeproprietaire');
    Route::resource('/parking', ParkingController::class,["as"=>"proprietaires"]);

});

require __DIR__.'/auth.php';
require __DIR__.'/vitrine.php';
