<?php

namespace App\Http\Controllers;


use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    public function index()
{
    $buku= Buku::all();
    // return $buku;
    return view('buku.index',compact('buku'));
    // compact mengambalikan array
}
}
