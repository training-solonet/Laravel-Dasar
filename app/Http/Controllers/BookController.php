<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index($judul){
        return view(
            'coba',[
            'data' => $this->get_buku(),
            'judul' => $judul
            ]

        );
    }

    function get_buku(){
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

    function persegi_panjang(){
        return view('lagi');
    }
    
    public function luaspersegipanjang(Request $request){

        $panjang = $request->get('panjang');
        $lebar = $request->get('lebar');
        $luas = $panjang * $lebar/2;
        return view('lagii', [
            'panjang' => $panjang,
            'lebar' => $lebar,
            'luas' => $luas,
        ]);
    }
    // function segitiga(){
    //     return view('lagii');
    // }
}
    

// compact()
    // public function compactluas{

    //     return view()
    // }