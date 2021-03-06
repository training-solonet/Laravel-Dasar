<?php

namespace App\Http\Controllers;

use App\Models\pengarang;
use Illuminate\Http\Request;
use App\Models\tabel_buku;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = tabel_buku::with('pengarang')->get();
        // return $buku;
        return view('buku.index', compact('buku'));
        // $buku = DB::table('tabel_bukus')->get();
        // return view('buku.index', ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('buku.create',);
        $pengarang = pengarang::all();
        return view("buku.create", compact("pengarang"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return::create([
        //     "" = ""
        // ])
        $request->validate([
            "judul" => "required|max:20",
            "penerbit" => "required",
            "tahun_terbit" => "required",
            "id_pengarang" => "required"
        ]);


        // return $request->all();
        tabel_buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Berhasil simpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = tabel_buku::find($id);
        $pengarang = pengarang::all();
        return view("buku.edit", [
            "buku" => $buku,
            "pengarang" => $pengarang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        tabel_buku::find($id)->update([
            "judul" => $request->judul,
            "tahun_terbit" => $request->tahun_terbit,
            "penerbit" => $request->penerbit,
            "id_pengarang" => $request->id_pengarang
        ]);
        return redirect()->route('buku.index')->with('success', 'Berhasil ubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tabel_buku::find($id)->delete();
        return redirect()->route('buku.index')->with('success', 'Berhasil dihapus !');
    }
}
