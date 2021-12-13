<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MegaController extends Controller
{
    // penempatan return di controller
    //      function index($judul){
    //      return 'ini halaman Buku ' .$judul;
    // }


    // penempatan return di view
    function index()
    {
        return view('book', [
            'data'  => $this->get_buku()
        ]);
    }
    // public function luaspersegipanjang(){
    //     $panjang = 4;
    //     $lebar = 5;
    //     $luas = $panjang * $lebar;
    //     return $luas;
    // }

    // function persegi_panjang(){
    //     return view('persegi-panjang');
    // }

    //  public function luaspersegipanjang(Request $request){
    //     $panjang    = $request->get('panjang');
    //     $lebar      = $request->get('lebar');
    //     $luas = $panjang * $lebar;
    //     return $luas;
    //  }

    function luass(){
        $alas = 3;
        $tinggi=4;
        $luas = $tinggi*$alas/2;
        return $luas;
    }

    function luasjajargenjang(){
        $alas = 5;
        $tinggi=8;
        $luas = $alas*$tinggi;
        return $luas;
    }


    function luasbelahketupat(){
        $d1 = 3;
        $d2=6;
        $luas = $d1*$d2/2;
        return $luas;
    }




    function segitiga()
    {
        return view('segitiga');
    }

    public function luassegitiga(Request $request)
    {
        $alas = $request->get('alas');
        $tinggi = $request->get('tinggi');
        $luas = $alas * $tinggi / 2;
        return view('luas-segitiga',
        [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' =>$luas
        ]);
    }
}




// public function get_buku(){
//     $data=[
//         [
//             'buku' => 'laravel dasar'
//         ],
//         [
//             'buku' => 'kimia'
//         ],
//         [
//             'buku' => 'fisika'
//         ],
//         [
//             'buku' => 'matematika'
//         ],
//     ];
//     return $data;
// }
