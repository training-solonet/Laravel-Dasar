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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{user}', function ($user) {
    return '<h1 style="text-align: center">Selamat Datang</h1>' . '<h1 style="text-align: center"> "' . $user . '"</h1>';
});

Route::get('/books/{judul}', [BookController::class, 'index']);

Route::get('persegi-panjang', [BookController::class, 'persegiPanjang']);

Route::post('/luas-persegi-panjang', [BookController::class, 'luasPersegiPanjang']);

Route::get('segitiga', [BookController::class, 'segitiga']);

Route::post('/luas-segitiga', [BookController::class, 'luasSegitiga']);

Route::get('/books', [BookController::class, 'index']);
