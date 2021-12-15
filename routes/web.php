<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;
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


use App\Http\Controllers\MegaController;
// Route::get('buku', [BukuController::class,'index']);
// Route::post('buku', [BukuController::class,'store']);
// Route::put('buku/{id}', [BukuController::class,'update']);
// Route::delete('buku/{id}',[BukuController::class,'destroy']);


Route::resource('buku',BukuController::class);
Route::resource('pengarang',BukuController::class);
// route menggunakan controler
// Route::get('/books', [MegaController::class, 'index']);
// // route menggunakan controler dan parameter
// Route::get('/books/{judul}', [MegaController::class, 'index']);
// //route mengguanan class persegipanjang
// Route::get('persegi-panjang', [MegaController::class, 'luaspersegipanjang']);

// Route::get('/persegi-panjang', [MegaController::class, 'persegi_panjang']);
// Route::post('/luas-persegi-panjang', [MegaController::class, 'luaspersegipanjang']);


Route::get('/Segitiga', [MegaController::class, 'luass']);
Route::get('/jajargenjang', [MegaController::class, 'luasjajargenjang']);
Route::get('/belahketupat', [MegaController::class, 'luasbelahketupat']);
Route::get('/segitiga', [MegaController::class, 'segitiga']);
Route::post('/luas-segitiga', [MegaController::class, 'luassegitiga']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
