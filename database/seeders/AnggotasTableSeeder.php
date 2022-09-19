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
              'npm'				=> 1941720130,
              'nama' 			=> 'Naila Nabila',
              'tempat_lahir'	=> 'Kota Malang',
              'tgl_lahir'		=> '2001-06-30',
              'jk'				=> 'P',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'user_id'  		=> 2,
              'npm'				=> 1941720063,
              'nama' 			=> 'Sri Kynanti',
              'tempat_lahir'	=> 'Kota Malang',
              'tgl_lahir'		=> '2001-04-10',
              'jk'				=> 'P',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 3,
                'user_id'  		=> 3,
                'npm'			=> 1941720111,
                'nama' 			=> 'Ervin Pratama',
                'tempat_lahir'	=> 'Kota Malang',
                'tgl_lahir'		=> '2000-12-13',
                'jk'			=> 'L',
                'prodi'			=> 'TI',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
        ]);
    }
}
