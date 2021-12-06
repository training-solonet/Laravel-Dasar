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

Route::get('/nathan', function () {
    return view('welcome');
});

Route::get('/user/{nama}', function($nama){
    return view('hello',[
        'nama' => $nama
    ]);
});
Route::get('/books', function(){
    return 'Ini halaman Buku';
});

Route::get('/books/{nama}', function($nama){
    return '<h1 style="text-align: center;">Selamat Datang</h1>'.
            '<h1 style="text-align: center;">"'.$nama .'"</h1>.';
});

