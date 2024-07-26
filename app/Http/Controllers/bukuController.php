<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function index() {
        $data = buku::all();
        return view('buku.home', ['data' => $data]);
    }

    public function create() {
        return view('buku.insertB');
    }

    public function store(Request $req) {
        buku::create($req->except('_token', 'proses'));
        return redirect('/buku');
    }

    public function edit($id) {
        $data = buku::find($id);
        return view('buku.edit', ['data' => $data]);
        // dd($id);
    }

    public function update($id, Request $req){
        $data=buku::find($id);
        $data->update($req->except('_token', 'proses'));
        return redirect('/buku');
    }

    public function destroy($id){
        $data=buku::find($id);
        $data->delete();
        return redirect('/buku');
    }
}
