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

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request){
        // return $request->all();
        // return 'ok'

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'ANDA TELAH BERHASIL MENAMBAH DATA !');
        // tabel_buku::create([
        //     'judul' => $request->judul,
        // ])
    }
}
