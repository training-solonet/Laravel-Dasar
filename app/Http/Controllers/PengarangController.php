<?php

namespace App\Http\Controllers;

use App\Models\pengarang;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // mengambil data dari tabel pengarang
        $pengarang = pengarang::all();
        return view('pengarang.index', compact('pengarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pengarang.create');
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
            'nama' => 'required|max:20',
            'alamat' => 'required',
            'no_telp' => 'required',
            'tgl_lahir' => 'required',
        ]);
        pengarang::create($request->all());
        return redirect()->route('pengarang.index')->with('success', 'Berhasil simpan !');
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
        // $pengarang = request()->all();
        $pengarang = pengarang::find($id);
        return view('pengarang.edit', compact('pengarang'));
        // return view('pengarang.edit')->with($pengarang);
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
        $pengarang = pengarang::find($id)->update([
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp,
            "tgl_lahir" => $request->tgl_lahir,
        ]);
        return redirect()->route('pengarang.index')->with('success', 'Update Data Berhasil');
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
        $post = pengarang::find($id);
        $post->delete();
        if ($post) {
            return redirect()->route('pengarang.index')->with('success', 'Hapus Data Berhasil');
        } else {
            return redirect()->route('pengarang.index')->with('success', 'Hapus Data Gagal');
        }
    }
}
