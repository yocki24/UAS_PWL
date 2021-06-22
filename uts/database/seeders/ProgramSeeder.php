<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'tittle' => 'Sepatu',
            'content' => 'Sepatu Baru',
            'harga' => '200.000'
        ]);
    }
}
