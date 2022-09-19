<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PendataansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Data::insert([
            [
              'id'  			=> 1,
              'perihaldata'     => 'Data Kepegawaian',
              'subdata'			=> 'Agama',
              'subsubdata' 		=> 'Islam',
              'jumlahdata'		=> '5',
              'tahun'	        => 2020,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
