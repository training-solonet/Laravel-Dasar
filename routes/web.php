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


use App\Http\Controllers\MegaController;
// route menggunakan controler
// Route::get('/books', [MegaController::class, 'index']);
// // route menggunakan controler dan parameter
// Route::get('/books/{judul}', [MegaController::class, 'index']);
// //route mengguanan class persegipanjang
// Route::get('persegi-panjang', [MegaController::class, 'luaspersegipanjang']);

// Route::get('/persegi-panjang', [MegaController::class, 'persegi_panjang']);
// Route::post('/luas-persegi-panjang', [MegaController::class, 'luaspersegipanjang']);


Route::get('/segitiga', [MegaController::class, 'segitiga']);
Route::post('/luas-segitiga', [MegaController::class, 'luassegitiga']);
