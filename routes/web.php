<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ConcertController;
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
    return view('concert.index');
})->name('welcome');

// Rutas de registro
Route::get('register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'store']);
//Route::resource('concert', ConcertController::class);
Route::get('/dashboard', [ConcertController::class, 'index'])->name('dashboard');
Route::post('/concert', [ConcertController::class, 'store'])->name('concert');
Route::get('concert', [ConcertController::class, 'create'])->name('concert.create');
