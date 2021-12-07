<?php

use App\Http\Controllers\BookController;
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

Route::get('/user/{user}', function ($nama) {
    return '<h1 style="text-align: center">Selamat Datang</h1>'
        . '<h1 style = "text-align: center">"' . $nama . '"</h1>';
});


Route::get('/book/{judul}', [BookController::class, 'index']);

// Route::get('/book', [BookController::class, 'get_buku']);

// Route::get('/persegi-panjang', [BookController::class, 'luaspersegipanjang']);

Route::get('/persegi-panjang', [BookController::class, 'persegi_panjang']);

Route::post('/github', [BookController::class, 'luaspersegipanjang']);

Route::get('/segitiga', [BookController::class, 'segitiga']);

Route::post('/luasSegitiga', [BookController::class, 'luasSegitiga']);
// Route::post('luasSegitiga', [BookController::class, 'luasSegitiga']);
