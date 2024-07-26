<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = 'tb_buku';
    protected $primaryKey = 'id_buku';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id_buku', 'nama_buku', 'genre_buku', 'tahun_terbit'];

    public function peminjams()
    {
        return $this->hasMany(Peminjam::class, 'id_buku', 'id_buku');
    }

}
