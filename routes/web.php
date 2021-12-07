<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

//Route::get('/user/{name}', function ($name) {
    //return '<h1 style="text-align: center"><u>Selamat Datang</u></h1> 
    //<center> <u> <h2>"'.$name.'"';
//});
    // Route::get('books/{judul}', [BookController::class, 'index']);

    // Route::get('persegi-panjang', [BookController::class, 'luaspersegipanjang']);
    
    // Route::get('/persegi-panjang',[BookController::class, 'persegi_panjang']);

    // Route::post('/luas-persegi-panjang', [BookController::class, 'luassegipanjang']);

    Route::get('/persegi-panjang',[BookController::class, 'persegi_panjang']);

    Route::post('/luas-persegi-panjang', [BookController::class, 'luassegipanjang']);

    Route::get('/segitiga', [BookController::class, 'segitiga']);

    Route::post('/luasSegitiga', [BookController::class, 'luasSegitiga']);


