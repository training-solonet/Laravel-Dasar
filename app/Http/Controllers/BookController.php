<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($judul = "Laravel"){
        return view('book', [
            'judul' => $judul,
            'data' => $this->get_buku()
        ]);

        
    }

    public function get_buku(){
        $data = [
            [
                "buku" => "Laravel Dasar"
            ],
            [
                "buku" => "Kimia"
            ],
            [
                "buku" => "Fisika"
            ],
            [
                "buku" => "Matematika"
            ]
        ];

        return $data;
    }

    public function persegiPanjang(){
        return view('persegiPanjang');
    }

    public function luasPersegiPanjang(Request $request){
        $panjang = $request->panjang;
        $lebar = $request->lebar;
        $luas = $panjang * $lebar;
        return $luas;
    }

    public function segitiga(){
        return view('segitiga');
    }

    public function luasSegitiga(Request $request){
        $alas = $request->alas;
        $tinggi = $request->tinggi;
        $luas = $alas * $tinggi / 2;
        return view('luasSegitiga', [
            "alas" => $alas,
            "tinggi" => $tinggi,
            "luas" => $luas
        ]);
    }

    public function luasSegitigaStatis(){
        $alas = 3;
        $tinggi = 4;
        $luas = $alas * $tinggi / 2;
        return $luas;
    }

    public function luasJajarGenjang(){
        $alas = 5;
        $tinggi = 8;
        $luas = $alas * $tinggi;
        return $luas;
    }

    public function luasBelahKetupat(){
        $diagonalA = 3;
        $diagonalB = 6;
        $luas = $diagonalA * $diagonalB / 2;
        return $luas;
    }
}
