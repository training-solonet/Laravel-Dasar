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

// Route::get('/user/{user}', function ($user) {
//     return '<div style=display:flex;>
//     <p style="display:flex; margin:auto; ">Selamat Datang</p>'. '<b style=display:flex; margin:auto;>'.$user.'</b>
//     </div>';

// });

$komen = 'ini Halaman Buku page ke-';

Route::get('/books/{page}', function ($page) {
    // return ''.$page;
    return '<p style="text-align:center; "><b>Selamat Datang</b><br>
     <b style="font-size:2em;">"'.$page.'"<b></p>';

});
