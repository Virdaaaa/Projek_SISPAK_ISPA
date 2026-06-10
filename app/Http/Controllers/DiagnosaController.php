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
        |--------------------------------------------------
        | Simpan jawaban user
        |--------------------------------------------------
        */

        if ($request->cf_user > 0) {

            DetailKonsultasi::create([

                'konsultasi_id' => $request->konsultasi_id,

                'gejala_id'     => $request->gejala_id,

                'cf_user'       => $request->cf_user

            ]);
        }

        /*
        |--------------------------------------------------
        | Ambil semua gejala
        |--------------------------------------------------
        */

        $gejalas = Gejala::all();

        /*
        |--------------------------------------------------
        | Pindah ke pertanyaan berikutnya
        |--------------------------------------------------
        */

        $index = $request->index + 1;

        /*
        |--------------------------------------------------
        | Jika pertanyaan habis
        |--------------------------------------------------
        */

        if ($index >= count($gejalas)) {

            return redirect(
                '/hasil/' . $request->konsultasi_id
            );
        }

        /*
        |--------------------------------------------------
        | Ambil gejala berikutnya
        |--------------------------------------------------
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
    | Halaman hasil diagnosa
    |--------------------------------------------------------------------------
    */

    public function hasil($id)
    {

        $konsultasi = Konsultasi::find($id);

        /*
        |--------------------------------------------------
        | Ambil gejala yang dipilih user
        |--------------------------------------------------
        */

        $detail = DetailKonsultasi::with('gejala')
            ->where(
                'konsultasi_id',
                $id
            )->get();

        /*
        |--------------------------------------------------
        | Ambil semua penyakit
        |--------------------------------------------------
        */

        $penyakits = Penyakit::all();

        $hasilDiagnosa = [];

        /*
        |--------------------------------------------------
        | Perhitungan CF
        |--------------------------------------------------
        */

        foreach ($penyakits as $penyakit) {

            $rules = Rule::where(
                'penyakit_id',
                $penyakit->id
            )->get();

            $cfCombine = 0;

            foreach ($rules as $rule) {

                $gejalaUser = $detail->where(
                    'gejala_id',
                    $rule->gejala_id
                )->first();

                if ($gejalaUser) {

                    /*
                    |--------------------------------------
                    | CF(H,E)
                    |--------------------------------------
                    */

                    $cf = $rule->bobot *
                          $gejalaUser->cf_user;

                    /*
                    |--------------------------------------
                    | Kombinasi CF
                    |--------------------------------------
                    */

                    $cfCombine =
                        $cfCombine +
                        ($cf * (1 - $cfCombine));
                }
            }

            /*
            |----------------------------------------------
            | Simpan hasil penyakit
            |----------------------------------------------
            */

            $hasilDiagnosa[] = [

                'penyakit'   => $penyakit->nama_penyakit,

                'deskripsi'  => $penyakit->deskripsi,

                'solusi'     => $penyakit->solusi,

                'persentase' => round(
                    $cfCombine * 100,
                    2
                )

            ];
        }

        /*
        |--------------------------------------------------
        | Urutkan terbesar
        |--------------------------------------------------
        */

        usort($hasilDiagnosa, function ($a, $b) {

            return $b['persentase']
                 <=> $a['persentase'];

        });

        /*
        |--------------------------------------------------
        | Ambil hasil tertinggi
        |--------------------------------------------------
        */

        $hasilUtama = $hasilDiagnosa[0];

        /*
        |--------------------------------------------------
        | Simpan hasil ke tabel konsultasi
        |--------------------------------------------------
        */

        $konsultasi->update([

            'hasil_diagnosa' => $hasilUtama['penyakit'],

            'persentase'     => $hasilUtama['persentase']

        ]);

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