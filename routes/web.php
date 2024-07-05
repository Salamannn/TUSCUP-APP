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
    return view('guest.dashboard');
});

Route::get('/bracket', function () {
    return view('guest.bracket');
});

Route::get('/grup', function(){
    return view('guest.grup');
});

Route::get('/jadwal', function(){
    return view('guest.jadwal');
});