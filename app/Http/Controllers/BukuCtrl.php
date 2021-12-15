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

    public function edit($id)
    {
        $edit = Buku::FindOrFail($id);
        return view('buku.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $edit = Buku::findorfail($id);
        $edit->update($request->all());
        return redirect()->route('buku.index')->with('success', 'ANDA TELAH BERHASIL UPDATE DATA !');

    }

    public function destroy($id)
    {
       
            $post = Buku::find($id); 
            $post->delete();
            return redirect()->route('buku.index')->with('success', 'ANDA TELAH BERHASIL HAPUS DATA !');
    }        
    

    public function store(Request $request){
        // return $request->all();
        // return 'ok'

        $request->validate([
            'judul'     => 'required',
            'tahun_terbit' => 'required',
            'penerbit' => 'required',
            'id_pengarang' => 'required',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'ANDA TELAH BERHASIL MENAMBAH DATA !');
        // tabel_buku::create([
        //     'judul' => $request->judul,
        // ])
    }
}
