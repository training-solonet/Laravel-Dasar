<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaLuas extends Controller
{
    
            function segitiga()
            {
                $alas = 3;
                $tinggi = 4;
                $luas = $alas *$tinggi / 2;
            
                return $luas;
            }
            
            function jajargenjang()
            {
                $alas = 5;
                $tinggi = 8;
                $luas = $alas *$tinggi;
            
                return $luas;
            }

            function belahketupat()
            {
                $d1 = 3;
                $d2 = 6;
                $luas = $d1 * $d2 / 2;
            
                return $luas;
            }
            }

        

