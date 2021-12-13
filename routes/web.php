<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\bukuController;
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

// LUAS SEGITIGA
Route::get('/segitiga', [BookController::class, 'segitiga']);

// Route::post('/luasSegitiga', [BookController::class, 'luasSegitiga']);
Route::get('/luas_segitiga', [BookController::class, 'luas_segitiga']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/luas_jajargenjang', [BookController::class, 'luas_jajargenjang']);

Route::get('luas_belahketupat', [BookController::class, 'luas_belahketupat']);

Route::get('/luas', [BookController::class, 'luas']);

Route::get('/perpus', [bukuController::class, 'index']);

Route::resource('buku', bukuController::class);
