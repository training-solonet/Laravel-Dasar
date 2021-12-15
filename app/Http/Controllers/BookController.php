<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

    function segitiga()
    {
        return (view('segitiga'));
    }

    function luasSegitiga(Request $request)
    {
        $alas = $request->get('alas');
        $tinggi = $request->get('tinggi');

        $luas = $alas * $tinggi / 2;

        return view(
            'luasSegitiga',
            [
                'alas' => $alas,
                'tinggi' => $tinggi,
                'luas' => $luas
            ]
        );
    }




    function index($judul)
    {
        return view('book', [
            'judul' => $judul,
            'data' => $this->get_buku()
        ]);
    }

    function get_buku()
    {
        $data = [
            [
                'buku' => 'Akhir Zaman'
            ],
            [
                'buku' => 'Siksa Kubur'
            ],
            [
                'buku' => 'Liang Lahat'
            ]
        ];
        // return view('book', compact('data'));
        return $data;
    }

    // function luaspersegipanjang()
    // {
    //     $panjang = 4;
    //     $lebar = 5;
    //     $luas = $panjang * $lebar;
    //     return $luas;
    // }

    function persegi_panjang()
    {
        return view('github');
    }

    function luaspersegipanjang(Request $request)
    {
        $panjang = $request->get('panjang');
        $lebar = $request->get('lebar');

        $luas = $panjang * $lebar;
        return $luas;
    }

    // function luaspersegipanjang()
    // {
    //     $panjang = 4;
    //     $lebar = 5;
    //     $luas = $panjang * $lebar;
    //     return view('luasPersegiPanjang', [
    //         'panjang' => $panjang,
    //         'lebar' => $lebar,
    //         'luas' => $luas
    //     ]);
    // }

    // function luaspersegipanjang()
    // {
    //     $panjang = 4;
    //     $lebar = 5;
    //     $luas = $panjang * $lebar;
    //     return view('luasPersegiPanjang', compact(panjang, lebar, luas));
    // }

    public function luas_segitiga()
    {
        $alas = 3;
        $tinggi = 4;
        $Luas = $alas * $tinggi / 2;

        return $Luas;
    }

    public function luas_jajargenjang()
    {
        $alas = 5;
        $tinggi = 8;

        $Luas = $alas * $tinggi;
        return $Luas;
    }

    public function luas_belahketupat()
    {
        $d1 = 3;
        $d2 = 6;

        $Luas = $d1 * $d2 / 2;
        return $Luas;
    }

    public function luas()
    {
        echo $this->luas_jajargenjang();
        echo "<br>";
        echo $this->luas_segitiga();
        echo "<br>";
        echo $this->luas_belahketupat();
    }
}
