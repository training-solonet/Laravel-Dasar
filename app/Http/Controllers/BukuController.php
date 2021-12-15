<?php

namespace App\Http\Controllers;


use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    public function index()
{
    $buku= Buku::all();
    // return $buku;
    return view('buku.index',compact('buku'));
    // compact mengambalikan array
}

public function create()
{
    return view('buku.create');
}

public function store(Request $request){

    $request->validate([
        'judul'=> 'required|max:20',
        'tahun_terbit'=> 'required|max:20',
        'penerbit'=> 'required|max:20',
        'judul'=> 'required|max:20',
    ]);

    buku::create($request->all());

    // buku::create([
    //     'judul' =>$request->judul,
    //     'tahun_terbit' =>$request->tahun_terbit,
    //     'penerbit' =>$request->penerbit,
    //     'id_pengarang' =>$request->id_pengarang
    // ]);
    return redirect()->route('buku.index')->with('success','Berhasil Simpan');
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
    public function destroy($id){

        Buku::find($id)->delete();
        return redirect()->route('buku.index')->with('success', "has been Deleted");
    }
}
