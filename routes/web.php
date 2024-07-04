<?php

use App\Http\Controllers\CategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;

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
    return view('welcome');
});


Route::resource('sports', SportController::class);

Route::get('sports/{sports}/categories',[CategoriController::class, 'index'])->name('sports.categories.index');
Route::get('sports/{sports}/categories/create',[CategoriController::class, 'create'])->name('sports.categories.create');
Route::post('sports/{sports}/categories',[CategoriController::class,'store'])->name('sports.categories.store');
Route::delete('sports/{sports}/categories/{categories}',[CategoriController::class,'destroy'])->name('sports.categories.destroy');