<?php

use App\Http\Controllers\BaganController;
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

// bagan
Route::get('/bracket', function () {
    return view('guest.bracket.index');
});

// Route::get('/bracket',[BaganController::class,'index'])->name('bracket');
Route::get('/bagan-futsal',function(){
    return view('guest.bracket.futsal');
});
//grup
Route::get('/grup', function(){
    return view('guest.grup');
});

Route::get('/jadwal', function(){
    return view('guest.jadwal');
});