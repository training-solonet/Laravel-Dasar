<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_buku extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'tahun_terbit',
        'penerbit',
        'id_pengarang'
    ];

    public function pengarang()
    {
        return $this->belongsTo(pengarang::class, 'id_pengarang');
    }
}
