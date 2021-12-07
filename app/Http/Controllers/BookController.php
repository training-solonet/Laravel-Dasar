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
    //public function luaspersegipanjang()
    //{
        //$panjang = 4;
        //$lebar = 5;
        //$luas = $panjang * $lebar;
        //return view('luaspersegi',[
            //'panjang' => $panjang,
            //'lebar' => $lebar,
            //'luas'=> $luas
        //]);
    //}
    //function get_buku()
    //{
        //$data =[
            //[
                //'buku' => 'laravel dasar'
            //],
            //[
                //'buku' => 'kimia'
            //],
            //[
                //'buku' => 'fisika'
            //],
            //[
                //'buku' => 'matematika'
            //]
        //];
        //return $data;

    //}
    // function persegi_panjang(){
    //     return view('persegi-panjang');
    // }
    // public function luassegipanjang(Request $request){
    //     $lebar   = $request-> get('lebar');
    //     $panjang = $request-> get('panjang');
    //     $luas    = $panjang * $lebar;

    //     return $luas;
    // }
}
