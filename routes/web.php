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
use App\Http\Controllers\SegitigaLuas;
use App\Http\Controllers\BukuCtrl;

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
Route::post('/luas2-segitiga', [ZidaneController::class, 'luassegitiga']);

Route::get('/segitiga', [SegitigaLuas::class, 'segitiga']);
Route::get('/jajargenjang', [SegitigaLuas::class, 'jajargenjang']);
Route::get('/belahketupat', [SegitigaLuas::class, 'belahketupat']);


// Route::get('buku', [BookCtrl::class,'index']);
// Route::post('buku', [BookCtrl::class,'store']);

// Route::get('buku', [BookCtrl::class,'index']);
// Route::get('buku', [BookCtrl::class,'index']);

    
Route::get('buku', [BukuCtrl::class, 'index']);
Route::resource('buku', BukuCtrl::class);
Route::resource('pengarang', BukuCtrl::class);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
