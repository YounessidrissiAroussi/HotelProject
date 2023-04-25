<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\DetailsReservationController;
use App\Http\Controllers\ChambersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\homeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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


Route::controller(homeController::class)->group(function(){
    Route::get('/home', 'index');
});

Route::controller(ReservationsController::class)->group(function(){
    Route::get('/Reservations', 'index');
    Route::get('/Reservations/create', 'create');
    Route::get('/Reservations/{id}', 'show');
    Route::get('/Reservations/{id}/edit', 'edit');
    Route::post('/Reservations', 'store');
    Route::patch('/Reservations/{id}', 'update');
    Route::delete('/Reservations/{id}', 'destroy');

    
// ****************************************************************
    Route::post('/Reserver', 'add');
    Route::get('/Reserver', 'ajouter');
    Route::patch('/Reservations/{id}/valide', 'valide');
    Route::delete('/Reservations/{id}/delete', 'delete');


});

Route::controller(ClientsController::class)->group(function () {
    Route::get('/Clients', 'index');
    Route::get('/Clients/create', 'create');
    Route::get('/Clients/{id}', 'show');
    Route::get('/Clients/{id}/edit', 'edit');
    Route::post('/Clients', 'store');
    Route::patch('/Clients/{id}', 'update');
    Route::delete('/Clients/{id}', 'destroy');
});

Route::controller(ChambersController::class)->group(function () {
    Route::get('/Chambers', 'index');
    Route::get('/chambers/create', 'create');
    Route::get('/chambers/{id}', 'show');
    Route::get('/chambers/{id}/edit', 'edit');
    Route::post('/chambers', 'store');
    Route::patch('/chambers/{id}', 'update');
    Route::delete('/chambers/{id}', 'destroy');
});

