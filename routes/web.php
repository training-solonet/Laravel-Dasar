<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ZidaneController;

// Route::get('/user/{name}', function ($name) {
//     return '<h1> <center> Selamat datang </center> </h1>  
//     <center><h1>"'.$name.'"';
// Route::get('/books/{judul}', [ZidaneController::class, 'index']);

// Route::get('persegi-panjang', [ZidaneController::class, 'luaspersegipanjang']);
// Route::get('/books/{judul}', [ZidaneController::class, 'index']);
// Route::get('/buku', [ZidaneController::class, 'buku']);

// Route::get('/persegi-panjang', [ZidaneController::class, 'persegi_panjang']);
// Route::post('/luas-persegi-panjang', [ZidaneController::class, 'luaspersegipanjang']);

Route::get('/segitiga', [ZidaneController::class, 'segitiga']);
Route::post('/luas-segitiga', [ZidaneController::class, 'luassegitiga']);