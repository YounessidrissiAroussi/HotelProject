<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\DetailsReservationController;
use App\Http\Controllers\ChambersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('websitepages.home');
});
Route::get('/Apropos', function () {
    return view('websitepages.about');
});
Route::get('/Service', function () {
    return view('websitepages.service');
});
Route::get('/Chombers', function () {
    return view('websitepages.rooms');
});
Route::get('/Contact', function () {
    return view('websitepages.contact');
});

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::controller(homeController::class)->group(function(){
        Route::get('/home', 'index');
    });
    Route::resource('Clients',ClientsController::class);
    Route::resource('Chambers',ChambersController::class);
    Route::resource('Reservations',ReservationsController::class);
    Route::controller(ReservationsController::class)->group(function(){
        Route::patch('/Reservations/{id}/valide', 'valide');
        Route::delete('/Reservations/{id}/delete', 'delete');
    });
});
Route::controller(ReservationsController::class)->group(function(){
    Route::post('/Reserver', 'add');
    Route::get('/Reserver', 'ajouter');
});
require __DIR__.'/auth.php';


// Route::get('/dashboard', function () {
//     return view('home.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//     Route::controller(homeController::class)->group(function(){
//         Route::get('/home', 'index');
//     });

//     Route::controller(ClientsController::class)->group(function () {
//         Route::get('/Clients', 'index');
//         Route::get('/Clients/create', 'create');
//         Route::get('/Clients/{id}', 'show');
//         Route::get('/Clients/{id}/edit', 'edit');
//         Route::post('/Clients', 'store');
//         Route::patch('/Clients/{id}', 'update');
//         Route::delete('/Clients/{id}', 'destroy');
//     });

//     Route::controller(ChambersController::class)->group(function () {
//         Route::get('/Chambers', 'index');
//         Route::get('/chambers/create', 'create');
//         Route::get('/chambers/{id}', 'show');
//         Route::get('/chambers/{id}/edit', 'edit');
//         Route::post('/chambers', 'store');
//         Route::patch('/chambers/{id}', 'update');
//         Route::delete('/chambers/{id}', 'destroy');
//     });

//     Route::controller(ReservationsController::class)->group(function(){
//         Route::get('/Reservations', 'index');
//         Route::get('/Reservations/create', 'create');
//         Route::get('/Reservations/{id}', 'show');
//         Route::get('/Reservations/{id}/edit', 'edit');
//         Route::post('/Reservations', 'store');
//         Route::patch('/Reservations/{id}', 'update');
//         Route::delete('/Reservations/{id}', 'destroy');

//     // ****************************************************************
//         Route::patch('/Reservations/{id}/valide', 'valide');
//         Route::delete('/Reservations/{id}/delete', 'delete');
//     });
// });

// Route::controller(ReservationsController::class)->group(function(){
//     Route::post('/Reserver', 'add');
//     Route::get('/Reserver', 'ajouter');
// });


// require __DIR__.'/auth.php';
