<?php

use App\Http\Controllers\peminjamController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\siswa;
use App\Models\buku;

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


//route siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/insert', [SiswaController::class, 'create']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::get('/siswa/{id_siswa}/edit', [SiswaController::class, 'edit']);
Route::put('/siswa/{id_siswa}', [SiswaController::class, 'update']);
Route::delete('/siswa/{id_siswa}', [SiswaController::class, 'destroy']);

//route buku
Route::get('/buku', [bukuController::class, 'index']);
Route::get('/buku/insert', [bukuController::class, 'create']);
Route::post('/buku/store', [bukuController::class, 'store']);
Route::get('/buku/{id_buku}/edit', [bukuController::class, 'edit']);
Route::put('/buku/{id_buku}', [bukuController::class, 'update']);
Route::delete('/buku/{id_buku}', [bukuController::class, 'destroy']);

//route peminjam
Route::get('/peminjam', [peminjamController::class,'index']);
Route::get('/peminjam/insert', [peminjamController::class, 'create']);
Route::post('/peminjam/store', [peminjamController::class, 'store']);
Route::get('/peminjam/{id_pinjam}/edit', [peminjamController::class, 'edit']);
Route::put('/peminjam/{id_pinjam}', [peminjamController::class, 'update']);
Route::delete('/peminjam/{id_pinjam}', [peminjamController::class, 'destroy']);



Route::get('/', function (){
    return view('welcome');
});






// Route::get('/index', function(){
//     return view('pageAwal.home', [
//         'name' => 'elga',
//         'role' => 'hehe',
//     ]);
// });

// Route::get('/', function () {
//     return view('home', ['name'=>'elgaa']);
// });
