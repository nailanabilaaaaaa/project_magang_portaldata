<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Anggota::insert([
            [
              'id'  			=> 1,
              'user_id'  		=> 1,
              'nip'				=> 1941720130,
              'nama' 			=> 'Naila Nabila',
              'tempat_lahir'	=> 'Kota Malang',
              'tgl_lahir'		=> '2001-06-30',
              'jk'				=> 'P',
              'alamat'			=> 'Jl. Kesatrian Terusan D.17 ( Asrama Skodam )',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
