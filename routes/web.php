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
    Route::get('/reservations', 'index');
    Route::get('/reservations/create', 'create');
    Route::get('/reservations/{id}', 'show');
    Route::get('/reservations/{id}/edit', 'edit');
    Route::post('/reservations', 'store');
    Route::patch('/reservations/{id}', 'update');
    Route::delete('/reservations/{id}', 'destroy');
// ****************************************************************
    Route::post('/Reserver', 'add');
    Route::get('/Reserver', 'ajouter');
    Route::patch('/reservations/{id}/valide', 'valide');
    Route::delete('/reservations/{id}/delete', 'delete');


});

Route::controller(ClientsController::class)->group(function () {
    Route::get('/clients', 'index');
    Route::get('/clients/create', 'create');
    Route::get('/clients/{id}', 'show');
    Route::get('/clients/{id}/edit', 'edit');
    Route::post('/clients', 'store');
    Route::patch('/clients/{id}', 'update');
    Route::delete('/clients/{id}', 'destroy');
});

Route::controller(ChambersController::class)->group(function () {
    Route::get('/chambers', 'index');
    Route::get('/chambers/create', 'create');
    Route::get('/chambers/{id}', 'show');
    Route::get('/chambers/{id}/edit', 'edit');
    Route::post('/chambers', 'store');
    Route::patch('/chambers/{id}', 'update');
    Route::delete('/chambers/{id}', 'destroy');
});

