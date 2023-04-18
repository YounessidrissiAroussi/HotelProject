<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ChambersController;


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
Route::controller(ReservationsController::class)->group(function(){
    Route::get('/Reserver', 'create');
    Route::post('/Reserver', 'store');

});

Route::controller(ClientsController::class)->group(function(){
    Route::get('/Clients','index');
    Route::get('/Clients/Ajouter','create');
    Route::post('/Clients/Ajouter','store');
    Route::get('/Clients/{clients}/Modifier','edit');
    Route::put('/Clients/{clients}/Modifier','update');
    Route::delete('/Clients/{clients}','destroy');
});

Route::controller(ChambersController::class)->group(function(){
    Route::get('/Chambers','index');
    Route::get('/Chambers/Ajouter','create');
    Route::post('/Chambers/Ajouter','store');
    Route::delete('/Chambers/{chambers}','destroy');
    Route::get('/Chambers/{chambers}/Modifier' , 'edit');
    Route::put('/Chambers/{chambers}/Modifier' , 'update');

});
