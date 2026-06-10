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

            [
                'kode_penyakit' => 'P005',
                'nama_penyakit' => 'Faringitis'
            ],

            [
                'kode_penyakit' => 'P006',
                'nama_penyakit' => 'Epiglotitis'
            ],

            [
                'kode_penyakit' => 'P007',
                'nama_penyakit' => 'Pleuritis'
            ],

            [
                'kode_penyakit' => 'P008',
                'nama_penyakit' => 'Common Cold'
            ],

            [
                'kode_penyakit' => 'P009',
                'nama_penyakit' => 'ILI (Influenza Like Illness) '
            ],

        ]);
    }
}