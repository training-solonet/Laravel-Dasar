<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
// {
//    function persegi_panjang(){
//        return view('persegi-panjang');

//    }
//    public function luaspersegipanjang(Request $request){
//        $panjang     = $request->get('panjang');
//        $lebar       = $request->get('lebar');
//        $luas        = $panjang * $lebar;

//        return $luas;
//    }
// }
{
function index()
    {
        return view('book', [
            'data'  => $this->get_buku()
        ]);
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









//         function buku()
//         {
//             return view('buku', [ 
//                 'data' => $this->get_buku()
//             ]);
//         }
//     }    


// {
//     function get_buku(){
//         $data = [
//             [
//                 'buku' => 'laravel'
//             ],
//             [
//                 'buku' => 'bahasa indonesia'
//             ],
//             [
//                 'buku' => 'agama'
//             ],
//             [
//                 'buku' => 'matematika'
//             ]

//             ];
//             return $data;
