<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['id_siswa', 'nama_siswa', 'kelas_siswa', 'jurusan' ];

    public function peminjams()
    {
        return $this->hasMany(Peminjam::class, 'id_siswa', 'id_siswa');
    }
}



