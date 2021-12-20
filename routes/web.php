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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return ('welcome');
// });

// Route::get('/books', function () {
//     return ('ini Halaman Buku');
// });

// Route::get('/books/{page}', function ($page) {
//     return 'ini Halaman Buku page ke-'.$page;
// });

use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PengarangController;

// Route::get('/books', [BookController::class,'index']);
// Route::get('/books/{judul}', [BookController::class,'index']);

// Route::get('/books/{judul}', [BookController::class,'index']);
Route::get('/books/{judul}', [BookController::class, 'index']);
Route::get('segitiga', [BookController::class, 'segitiga']);
Route::post('luas-segitiga', [BookController::class, 'luasSegitiga']);
// Route::post('luas-persegi-panjang', [BookController::class,'luaspersegipanjang']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Route::get('/jajargenjang', function () {
//     $alas = 5;
//     $tinggi = 8;
//     $luas = $alas * $tinggi;
//     return $luas;
// });

Route::get('/belahketupat', [BookController::class, 'belahketupat']);
Route::get('/jajargenjang', [BookController::class, 'jajargenjang']);

//Bukku
Route::get('buku', [BukuController::class, 'index']);
// Route::post('buku', [BookController::class,'jajargenjang']);
// Route::put('/jajargenjang', [BookController::class,'jajargenjang']);
// Route::delete('/jajargenjang', [BookController::class,'jajargenjang']);
Route::resource('buku', BukuController::class);
Route::resource('pengarang', PengarangController::class);
// Route::resource('buku', Controller::class);
