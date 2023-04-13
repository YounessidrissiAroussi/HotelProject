<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home');
});
Route::get('/Apropos', function () {
    return view('pages.about');
});
Route::get('/Service', function () {
    return view('pages.service');
});
Route::get('/Chombers', function () {
    return view('pages.rooms');
});
Route::get('/Contact', function () {
    return view('pages.contact');
});
Route::get('/Reserver', function () {
    return view('pages.reservation');
});
