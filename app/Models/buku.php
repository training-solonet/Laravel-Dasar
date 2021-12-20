<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tahun_terbit',
        'penerbit',
        'id_pengarang'
    ];

    // protected $table = 'bukus';


    public function pengarang()
    {

        return $this->belongsTo(pengarang::class, 'id_pengarang');
    }
}
