<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gejala')->insert([

            [
                'kode_gejala' => 'G001',
                'nama_gejala' => 'Demam'
            ],

            [
                'kode_gejala' => 'G002',
                'nama_gejala' => 'Batuk-Batuk'
            ],

            [
                'kode_gejala' => 'G003',
                'nama_gejala' => 'Sesak Nafas'
            ],

            [
                'kode_gejala' => 'G004',
                'nama_gejala' => 'Pilek'
            ],

        ]);
    }
}