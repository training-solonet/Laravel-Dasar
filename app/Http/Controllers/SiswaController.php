<?php
namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        $data = siswa::all();
        return view('siswa.home', ['data' => $data]);
    }

    public function create() {
        return view('siswa.insertS');
    }

    public function store(Request $req) {
        // dd($req->except('_token', 'proses'));
        siswa::create($req->except('_token', 'proses'));
        return redirect('/siswa');
    }

    public function edit($id) {
        $data =siswa::find($id);
        return view('siswa.edit', ['data' => $data]);
        // dd($id);
    }

    public function update($id, Request $req){
        $data=siswa::find($id);
        $data->update($req->except('_token', 'proses'));
        return redirect('/siswa');
        
    }

    public function destroy($id){
        $data=siswa::find($id);
        $data->delete();
        return redirect('/siswa');
    }
}
