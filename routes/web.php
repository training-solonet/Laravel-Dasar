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

// Route::get('/user/john', function () {
    // return view('john');
// });

Route::get('users/{nama}', function ($nama) {
    return '<h2><center>Selamat Datang<br>"'.$nama.'"</center></h2>';
});
