<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tahun_terbit',
        'penerbit',
        'id_pengarang'
    ];

    // protected $title = "buku";
}
