<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengarang extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'nama',
        'alamat',
        'no_telp',
        'tgl_lahir'
    ];

    // public function pengarang()
    // {
    //     return $this->HasOne(pengarang::class, 'nama');
    // }
}
