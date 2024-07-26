<?php
namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\buku;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index()
    {
        $data = Peminjam::with(['siswa', 'buku'])->get();
        return view('peminjam.home', compact('data'));
    }

    public function create(){
        $siswa = siswa::all();
        $buku = buku::all();
        return view('peminjam.insert', compact('siswa', 'buku'));
    }

    public function store(Request $req){
        // dd($req->except('_token', 'proses'));
        
        $peminjam = new Peminjam();           
        $peminjam -> id_siswa = $req -> id_siswa;
        $peminjam -> id_buku = $req -> id_buku;
        $peminjam -> tgl_pinjam = $req -> tgl_pinjam;
        $peminjam->save();

        return redirect('/peminjam');
    }

    public function edit($id){
        $peminjam=Peminjam::find($id);
        $siswa=siswa::all();
        $buku=buku::all();
        return view('peminjam.edit', compact('siswa', 'buku', 'peminjam'));
        
    }

                            // jangan lupa pakai Request
    public function update($id, Request $req){
        
        $peminjam= peminjam::find($id);
        $peminjam -> id_siswa = $req -> id_siswa;   
        $peminjam -> id_buku = $req -> id_buku;
        $peminjam -> tgl_pinjam = $req -> tgl_pinjam;
        $peminjam->save();

        return redirect('/peminjam');
        
    }

    public function destroy($id){
        $data=Peminjam::find($id);
        $data->delete();
        return redirect('/peminjam');
    }
}
