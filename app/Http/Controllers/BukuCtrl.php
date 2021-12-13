<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuCtrl extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        // return $buku;

        return view('buku.index', compact('buku'));
    }
}
