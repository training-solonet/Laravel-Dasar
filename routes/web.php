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

Route::get('/user/{user}', function ($nama) {
    // return view(
    //     'user',
    //     [
    //         'name' => "$nama",
    //         'text' => 'Selamat Datang'

    //     ]


    // );
    return '<h1 style="text-align: center">Selamat Datang</h1>' . '<h1 style = "text-align: center">"' . $nama . '"</h1>';
});
