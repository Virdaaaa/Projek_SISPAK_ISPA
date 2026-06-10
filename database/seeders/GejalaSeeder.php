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
                'nama_gejala' => 'Hidung Tersumbat / Pilek'
            ],

            [
                'kode_gejala' => 'G004',
                'nama_gejala' => 'Sakit Kepala/Pusing '
            ],

            [
                'kode_gejala' => 'G005',
                'nama_gejala' => 'Sakit Tenggorokan '
            ],

            [
                'kode_gejala' => 'G006',
                'nama_gejala' => 'Susah Menelan'
            ],

            [
                'kode_gejala' => 'G007',
                'nama_gejala' => 'Badan Lemas & Lesu'
            ],

            [
                'kode_gejala' => 'G008',
                'nama_gejala' => 'Sesak Nafas'
            ],

            [
                'kode_gejala' => 'G009',
                'nama_gejala' => 'Bersin-Bersin'
            ],

            [
                'kode_gejala' => 'G010',
                'nama_gejala' => 'Frekuensi Nafas Cepat'
            ],

            [
                'kode_gejala' => 'G011',
                'nama_gejala' => 'Suara Nafas Kasar'
            ],

            [
                'kode_gejala' => 'G012',
                'nama_gejala' => 'Nafsu Makan Berkurang'
            ],

            [
                'kode_gejala' => 'G013',
                'nama_gejala' => 'Suara Serak'
            ],

            [
                'kode_gejala' => 'G014',
                'nama_gejala' => 'Gelisah'
            ],

            [
                'kode_gejala' => 'G015',
                'nama_gejala' => 'Susah Tidur'
            ],

            [
                'kode_gejala' => 'G016',
                'nama_gejala' => 'Nyeri Di Dada'
            ],

            [
                'kode_gejala' => 'G017',
                'nama_gejala' => 'Berkurangnya Kemampuan Indra Penciuman'
            ],

            [
                'kode_gejala' => 'G018',
                'nama_gejala' => 'Wajah Terasa Nyeri Atau Tertekan'
            ],

            [
                'kode_gejala' => 'G019',
                'nama_gejala' => 'Bau Mulut'
            ],

            [
                'kode_gejala' => 'G020',
                'nama_gejala' => 'Sakit Gigi'
            ],

            [
                'kode_gejala' => 'G021',
                'nama_gejala' => 'Nyeri Sendi Atau Nyeri Otot'
            ],

            [
                'kode_gejala' => 'G022',
                'nama_gejala' => 'Berkeringat Dan Menggigil'
            ],

            [
                'kode_gejala' => 'G023',
                'nama_gejala' => 'Batuk Dengan Dahak Kental Berwarna Hijau,Kuning, Atau Disertai Darah'
            ],

            [
                'kode_gejala' => 'G024',
                'nama_gejala' => 'Diare'
            ],

            [
                'kode_gejala' => 'G025',
                'nama_gejala' => 'Mual Atau Muntah'
            ],

            [
                'kode_gejala' => 'G026',
                'nama_gejala' => 'Nyeri Bahu Dan Punggung'
            ],

            [
                'kode_gejala' => 'G027',
                'nama_gejala' => 'Hidung Berair'
            ],

            [
                'kode_gejala' => 'G028',
                'nama_gejala' => 'Nyeri Telinga'
            ],
            
            [
                'kode_gejala' => 'G029',
                'nama_gejala' => 'Mata Berair'
            ],

            [
                'kode_gejala' => 'G030',
                'nama_gejala' => 'Dehidrasi / Kekurangan Cairan'
            ],

        ]);
    }
}