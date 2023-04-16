<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
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


Route::get('/Add' , function(){
    return view('app');
});