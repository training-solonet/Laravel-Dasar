<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    //
    public function index(){
        // mengambil data dari tabel buku
        $buku = buku::all();
        // return $buku;

        // 
        return view('buku.index', compact('buku'));
    }
}
