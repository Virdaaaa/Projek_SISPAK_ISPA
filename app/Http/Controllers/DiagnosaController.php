<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gejala;
use App\Models\Konsultasi;
use App\Models\DetailKonsultasi;
use App\Models\Penyakit;
use App\Models\Rule;

class DiagnosaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Menampilkan pertanyaan pertama
    |--------------------------------------------------------------------------
    */

    public function index(Request $request)
    {

        $konsultasi = Konsultasi::create([

            'nama_pasien'   => $request->nama,

            'jenis_kelamin' => $request->jk,

            'tempat_lahir'  => $request->tempat_lahir,

            'tanggal_lahir' => $request->tanggal_lahir,

            'tinggi_badan'  => $request->tinggi_badan,

            'berat_badan'   => $request->berat_badan,

            'alamat'        => $request->alamat

        ]);

        $gejalas = Gejala::all();

        $index = 0;

        $gejala = $gejalas[$index];

        return view(
            'user.diagnosa',
            compact(
                'gejala',
                'gejalas',
                'index',
                'konsultasi'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | Next pertanyaan
    |--------------------------------------------------------------------------
    */

    public function next(Request $request)
    {

        /*
        |--------------------------------------------------------------------------
        | Simpan jawaban user
        |--------------------------------------------------------------------------
        */

        if ($request->cf_user > 0) {

            DetailKonsultasi::create([

                'konsultasi_id' => $request->konsultasi_id,

                'gejala_id'     => $request->gejala_id,

                'cf_user'       => $request->cf_user

            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Ambil semua gejala
        |--------------------------------------------------------------------------
        */

        $gejalas = Gejala::all();

        /*
        |--------------------------------------------------------------------------
        | Next index
        |--------------------------------------------------------------------------
        */

        $index = $request->index + 1;

        /*
        |--------------------------------------------------------------------------
        | Jika pertanyaan habis
        |--------------------------------------------------------------------------
        */

        if ($index >= count($gejalas)) {

            return redirect(
                '/hasil/' . $request->konsultasi_id
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Ambil pertanyaan berikutnya
        |--------------------------------------------------------------------------
        */

        $gejala = $gejalas[$index];

        $konsultasi = Konsultasi::find(
            $request->konsultasi_id
        );

        return view(
            'user.diagnosa',
            compact(
                'gejala',
                'gejalas',
                'index',
                'konsultasi'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | HASIL DIAGNOSA - REALISTIC ENGINE V2
    |--------------------------------------------------------------------------
    */

    public function hasil($id)
    {

        /*
        |--------------------------------------------------------------------------
        | Ambil konsultasi
        |--------------------------------------------------------------------------
        */

        $konsultasi = Konsultasi::find($id);

        /*
        |--------------------------------------------------------------------------
        | Ambil gejala user
        |--------------------------------------------------------------------------
        */

        $detail = DetailKonsultasi::with('gejala')
            ->where('konsultasi_id', $id)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | Ambil semua penyakit
        |--------------------------------------------------------------------------
        */

        $penyakits = Penyakit::all();

        $hasilDiagnosa = [];

        /*
        |--------------------------------------------------------------------------
        | LOOP PENYAKIT
        |--------------------------------------------------------------------------
        */

        foreach ($penyakits as $penyakit) {

            /*
            |--------------------------------------------------------------------------
            | Ambil rules penyakit
            |--------------------------------------------------------------------------
            */

            $rules = Rule::where(
                'penyakit_id',
                $penyakit->id
            )->get();

            /*
            |--------------------------------------------------------------------------
            | Ambil gejala inti
            |--------------------------------------------------------------------------
            */

            $gejalaInti = $rules->where(
                'is_gejala_inti',
                1
            );

            $jumlahGejalaIntiCocok = 0;

            /*
            |--------------------------------------------------------------------------
            | Hitung gejala inti yang cocok
            |--------------------------------------------------------------------------
            */

            foreach ($gejalaInti as $inti) {

                $cek = $detail->where(
                    'gejala_id',
                    $inti->gejala_id
                )->first();

                if ($cek) {

                    $jumlahGejalaIntiCocok++;
                }
            }

            /*
            |--------------------------------------------------------------------------
            | FILTERING
            |--------------------------------------------------------------------------
            | Minimal 2 gejala inti cocok
            |--------------------------------------------------------------------------
            */

            if ($jumlahGejalaIntiCocok < 2) {

                $hasilDiagnosa[] = [

                    'penyakit'   => $penyakit->nama_penyakit,

                    'deskripsi'  => $penyakit->deskripsi,

                    'solusi'     => $penyakit->solusi,

                    'persentase' => 0

                ];

                continue;
            }

            /*
            |--------------------------------------------------------------------------
            | CERTAINTY FACTOR
            |--------------------------------------------------------------------------
            */

            $cfCombine = 0;

            $jumlahGejalaCocok = 0;

            foreach ($rules as $rule) {

                $gejalaUser = $detail->where(
                    'gejala_id',
                    $rule->gejala_id
                )->first();

                /*
                |--------------------------------------------------------------------------
                | Jika gejala cocok
                |--------------------------------------------------------------------------
                */

                if ($gejalaUser) {

                    $jumlahGejalaCocok++;

                    /*
                    |--------------------------------------------------------------------------
                    | CF(H,E)
                    |--------------------------------------------------------------------------
                    */

                    $cf =
                        $rule->bobot *
                        $gejalaUser->cf_user;

                    /*
                    |--------------------------------------------------------------------------
                    | CF COMBINE
                    |--------------------------------------------------------------------------
                    */

                    $cfCombine =
                        $cfCombine +
                        ($cf * (1 - $cfCombine));
                }
            }

            /*
            |--------------------------------------------------------------------------
            | Penalti gejala tidak relevan
            |--------------------------------------------------------------------------
            */

            $jumlahGejalaUser =
                $detail->count();

            $gejalaTidakRelevan =
                $jumlahGejalaUser -
                $jumlahGejalaCocok;

            /*
            |--------------------------------------------------------------------------
            | Jika terlalu banyak gejala tidak relevan
            |--------------------------------------------------------------------------
            */

            if ($gejalaTidakRelevan >= 3) {

                $cfCombine =
                    $cfCombine - 0.15;
            }

            /*
            |--------------------------------------------------------------------------
            | Jangan minus
            |--------------------------------------------------------------------------
            */

            if ($cfCombine < 0) {

                $cfCombine = 0;
            }

            /*
            |--------------------------------------------------------------------------
            | Konversi persen
            |--------------------------------------------------------------------------
            */

            $persentase =
                round($cfCombine * 100, 2);

            /*
            |--------------------------------------------------------------------------
            | Hindari overconfidence
            |--------------------------------------------------------------------------
            */

            if ($persentase > 95) {

                $persentase = 85;
            }

            /*
            |--------------------------------------------------------------------------
            | Simpan hasil
            |--------------------------------------------------------------------------
            */

            $hasilDiagnosa[] = [

                'penyakit'   => $penyakit->nama_penyakit,

                'deskripsi'  => $penyakit->deskripsi,

                'solusi'     => $penyakit->solusi,

                'persentase' => $persentase

            ];
        }

        /*
        |--------------------------------------------------------------------------
        | Urutkan hasil terbesar
        |--------------------------------------------------------------------------
        */

        usort($hasilDiagnosa, function ($a, $b) {

            return $b['persentase']
                <=> $a['persentase'];
        });

        /*
        |--------------------------------------------------------------------------
        | Ambil hasil tertinggi
        |--------------------------------------------------------------------------
        */

        $hasilUtama = $hasilDiagnosa[0];

        /*
        |--------------------------------------------------------------------------
        | Simpan hasil konsultasi
        |--------------------------------------------------------------------------
        */

        $konsultasi->update([

            'hasil_diagnosa' => $hasilUtama['penyakit'],

            'persentase'     => $hasilUtama['persentase']

        ]);

        /*
        |--------------------------------------------------------------------------
        | Tampilkan view hasil
        |--------------------------------------------------------------------------
        */

        return view(
            'user.hasil',
            compact(
                'konsultasi',
                'hasilUtama',
                'hasilDiagnosa',
                'detail'
            )
        );
    }
}