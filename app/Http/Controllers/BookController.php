<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index($judul)
    {
        return view(
            'coba',
            [
                'data' => $this->get_buku(),
                'judul' => $judul
            ]

        );
    }

    function get_buku()
    {
        $data = [
            [
                'buku' => 'Matematika'
            ],
            [
                'buku' => 'Kimia'
            ],
            [
                'buku' => 'Fisika'
            ],
            [
                'buku' => 'Biologi'
            ]

        ];

        // return view('coba',compact('data'));
        return $data;
    }

    // function luaspersegipanjang(){

    //     $panjang = 4;
    //     $lebar = 5;
    //     $luas = $panjang * $lebar;
    //     return $luas;
    // }

    // public function luaspersegipanjang(){

    //     $P = 4;
    //     $L = 5;
    //     // return $luas;
    //     return view(
    //         'luas',[
    //             'panjang' => $P,
    //             'lebar' => $L,
    //             'luas' => $P * $L,
    //         ]
    //     );
    // }


    // SEGITIGA
    function segitiga()
    {
        return view('lagi');
    }

    public function luasSegitiga(Request $request)
    {

        $panjang = $request->get('panjang');
        $lebar = $request->get('lebar');
        $luas = $panjang * $lebar / 2;
        return view('lagii', [
            'alas' => $panjang,
            'tinggi' => $lebar,
            'luas' => $luas,
        ]);
    }

public function jajargenjang() {
    $alas = 5;
    $tinggi = 8;
    $luas = $alas * $tinggi;
    return $luas;
}

public function belahketupat() {
    $d1 = 3;
    $d2 = 6;
    $luas = $d1 * $d2 / 2;
    return $luas;
}

    // Jajar Genjang
    // public function jajargenjang (){
    //     $alas = 5;
    //     $tinggi = 7;

    // }



    // function segitiga(){
    //     return view('lagii');
    // }
    }
    

// compact()
    // public function compactluas{

    //     return view()
    // }