<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Pengarang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Buku::factory(5)->create();

        Pengarang::create([
            'nama' => 'james clear',
            'alamat' => 'makamhaji',
            'no_telp' => '085159436455',
            'tgl_lahir' => '11/03/2003'
        ]);

        Pengarang::create([
            'nama' => 'ryan holiday',
            'alamat' => 'makamhaji',
            'no_telp' => '085159436455',
            'tgl_lahir' => '11/03/2003'
        ]);
    }
}
