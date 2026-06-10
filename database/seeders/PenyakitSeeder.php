<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyakitSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('penyakit')->insert([

            [
                'kode_penyakit' => 'P001',
                'nama_penyakit' => 'Bronkitis'
            ],

            [
                'kode_penyakit' => 'P002',
                'nama_penyakit' => 'Sinusitis'
            ],

            [
                'kode_penyakit' => 'P003',
                'nama_penyakit' => 'Bronkiolitis'
            ],

            [
                'kode_penyakit' => 'P004',
                'nama_penyakit' => 'Pneumonia'
            ],

        ]);
    }
}