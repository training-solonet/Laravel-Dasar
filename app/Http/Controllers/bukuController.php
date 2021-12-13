<?php

namespace App\Http\Controllers;

use App\Models\tabel_buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index()
    {
        $buku = tabel_buku::all();
        return view('buku.index', compact('buku'));
    }
}
