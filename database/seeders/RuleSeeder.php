<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rules')->insert([

            /*
            |--------------------------------------------------------------------------
            | P001 - Bronkitis
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 1, 'gejala_id' => 1,  'bobot' => 0.8],
            ['penyakit_id' => 1, 'gejala_id' => 2,  'bobot' => 0.9],
            ['penyakit_id' => 1, 'gejala_id' => 8,  'bobot' => 0.8],
            ['penyakit_id' => 1, 'gejala_id' => 16, 'bobot' => 0.7],
            ['penyakit_id' => 1, 'gejala_id' => 23, 'bobot' => 0.9],

            /*
            |--------------------------------------------------------------------------
            | P002 - Sinusitis
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 2, 'gejala_id' => 3,  'bobot' => 0.8],
            ['penyakit_id' => 2, 'gejala_id' => 4,  'bobot' => 0.7],
            ['penyakit_id' => 2, 'gejala_id' => 17, 'bobot' => 0.9],
            ['penyakit_id' => 2, 'gejala_id' => 18, 'bobot' => 0.8],
            ['penyakit_id' => 2, 'gejala_id' => 19, 'bobot' => 0.6],
            ['penyakit_id' => 2, 'gejala_id' => 20, 'bobot' => 0.6],

            /*
            |--------------------------------------------------------------------------
            | P003 - Bronkiolitis
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 3, 'gejala_id' => 2,  'bobot' => 0.7],
            ['penyakit_id' => 3, 'gejala_id' => 8,  'bobot' => 0.9],
            ['penyakit_id' => 3, 'gejala_id' => 10, 'bobot' => 0.8],
            ['penyakit_id' => 3, 'gejala_id' => 11, 'bobot' => 0.8],
            ['penyakit_id' => 3, 'gejala_id' => 14, 'bobot' => 0.6],

            /*
            |--------------------------------------------------------------------------
            | P004 - Pneumonia
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 4, 'gejala_id' => 1,  'bobot' => 0.8],
            ['penyakit_id' => 4, 'gejala_id' => 8,  'bobot' => 0.9],
            ['penyakit_id' => 4, 'gejala_id' => 10, 'bobot' => 0.8],
            ['penyakit_id' => 4, 'gejala_id' => 16, 'bobot' => 0.8],
            ['penyakit_id' => 4, 'gejala_id' => 23, 'bobot' => 0.9],

            /*
            |--------------------------------------------------------------------------
            | P005 - Faringitis
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 5, 'gejala_id' => 5,  'bobot' => 0.9],
            ['penyakit_id' => 5, 'gejala_id' => 6,  'bobot' => 0.8],
            ['penyakit_id' => 5, 'gejala_id' => 13, 'bobot' => 0.7],
            ['penyakit_id' => 5, 'gejala_id' => 15, 'bobot' => 0.6],

            /*
            |--------------------------------------------------------------------------
            | P006 - Epiglotitis
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 6, 'gejala_id' => 5,  'bobot' => 0.8],
            ['penyakit_id' => 6, 'gejala_id' => 6,  'bobot' => 0.9],
            ['penyakit_id' => 6, 'gejala_id' => 8,  'bobot' => 0.9],
            ['penyakit_id' => 6, 'gejala_id' => 13, 'bobot' => 0.7],

            /*
            |--------------------------------------------------------------------------
            | P007 - Pleuritis
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 7, 'gejala_id' => 16, 'bobot' => 0.9],
            ['penyakit_id' => 7, 'gejala_id' => 21, 'bobot' => 0.7],
            ['penyakit_id' => 7, 'gejala_id' => 22, 'bobot' => 0.8],
            ['penyakit_id' => 7, 'gejala_id' => 26, 'bobot' => 0.8],

            /*
            |--------------------------------------------------------------------------
            | P008 - Common Cold
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 8, 'gejala_id' => 3,  'bobot' => 0.8],
            ['penyakit_id' => 8, 'gejala_id' => 9,  'bobot' => 0.7],
            ['penyakit_id' => 8, 'gejala_id' => 27, 'bobot' => 0.9],
            ['penyakit_id' => 8, 'gejala_id' => 29, 'bobot' => 0.6],

            /*
            |--------------------------------------------------------------------------
            | P009 - ILI
            |--------------------------------------------------------------------------
            */

            ['penyakit_id' => 9, 'gejala_id' => 1,  'bobot' => 0.8],
            ['penyakit_id' => 9, 'gejala_id' => 7,  'bobot' => 0.7],
            ['penyakit_id' => 9, 'gejala_id' => 21, 'bobot' => 0.9],
            ['penyakit_id' => 9, 'gejala_id' => 22, 'bobot' => 0.8],
            ['penyakit_id' => 9, 'gejala_id' => 24, 'bobot' => 0.6],
            ['penyakit_id' => 9, 'gejala_id' => 25, 'bobot' => 0.6],
            ['penyakit_id' => 9, 'gejala_id' => 30, 'bobot' => 0.7],

        ]);
    }
}