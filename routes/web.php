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

// Route::get('/books', [BookController::class,'index']);
// Route::get('/books/{judul}', [BookController::class,'index']);

// Route::get('/books/{judul}', [BookController::class,'index']);
Route::get('/books/{judul}', [BookController::class,'index']);
Route::get('persegi-panjang', [BookController::class,'persegi_panjang']);
Route::post('luas-persegi-panjang', [BookController::class,'luaspersegipanjang']);
// Route::post('luas-persegi-panjang', [BookController::class,'luaspersegipanjang']);

