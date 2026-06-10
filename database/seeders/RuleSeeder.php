<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rules')->insert([

            [
                'penyakit_id' => 1,
                'gejala_id' => 1,
                'bobot' => 0.8
            ],

            [
                'penyakit_id' => 1,
                'gejala_id' => 2,
                'bobot' => 0.6
            ],

            [
                'penyakit_id' => 1,
                'gejala_id' => 3,
                'bobot' => 0.9
            ],

            [
                'penyakit_id' => 2,
                'gejala_id' => 1,
                'bobot' => 0.5
            ],

            [
                'penyakit_id' => 2,
                'gejala_id' => 4,
                'bobot' => 0.7
            ],

        ]);
    }
}