<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku= Buku::all();
    // return $buku;
    return view('buku.index',compact('buku'));
    // compact mengambalikan array
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $buku = Buku::find($id);
        return view('buku.edit', $buku);
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
        Buku::where('id', $id)->update([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
            'penerbit' => $request->penerbit,
            'id_pengarang' => $request->id_pengarang
        ]);

        return redirect()->route('buku.index')->with('success', 'Data berhasil di edit!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::find($id)->delete();
        return redirect()->route('buku.index')->with('success', "has been Deleted");
    }
}
