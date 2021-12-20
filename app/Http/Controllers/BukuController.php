<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\pengarang;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // mengambil data dari tabel buku
        // $buku = buku::all();
        $buku = buku::with('pengarang')->get();
        // $buku = buku::with('pengarang')->find("$id")->all();
        // return $buku;

        // 
        // return view('buku.index', compact('buku'));
        return view('buku.index', compact('buku'));
        // ->with('success', 'berhasil !');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pengarang = pengarang::all();
        return view('buku.create', compact('pengarang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required|max:20',
            'tahun_terbit' => 'required',
            // 'judul' => 'required',
            'penerbit' => 'required',
            'id_pengarang' => 'required',
        ]);
        buku::create($request->all());
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
        //
        // $buku = request()->all();
        $buku = buku::find($id);
        $pengarang = pengarang::all();
        return view('Buku.edit', [
            'buku' => $buku,
            'pengarang' => $pengarang
        ]);
        // return view('Buku.edit')->with($buku);
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
        //
        $buku = buku::find($id)->update([
            "judul" => $request->judul,
            "tahun_terbit" => $request->tahun_terbit,
            "penerbit" => $request->penerbit,
            "id_pengarang" => $request->id_pengarang,
        ]);
        // $id->update($request->all());

        // $buku = buku::find($id);
        // return view('Buku.edit')->with($buku);
        // $buku = request('buku/{buku}')->all()->update();
        return redirect()->route('buku.index')->with('success', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = buku::find($id);
        $post->delete();
        // Route::get('buku/{id}')->delete();
        // , function ($id) {
        if ($post) {
            return redirect()->route('buku.index')->with('success', 'Hapus Data Berhasil');
        } else {
            return redirect()->route('buku.index')->with('success', 'Hapus Data Gagal');
        }
        // });
        // DB::table('buku')->delete();
        // DB::table('buku')->where('votes', '>', 100)->delete();
    }
}
