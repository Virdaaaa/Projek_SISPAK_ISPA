<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $konsultasis = Konsultasi::latest()->get();

        return view(
            'admin.konsultasi',
            compact('konsultasis')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $request->validate([

            'nama_pasien'   => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'tinggi_badan'  => 'required',
            'berat_badan'   => 'required',
            'alamat'        => 'required',
            'hasil_diagnosa'=> 'required',
            'persentase'    => 'required'
        ]);

        $konsultasi = Konsultasi::findOrFail($id);

        $konsultasi->update([

            'nama_pasien'   => $request->nama_pasien,

            'jenis_kelamin' => $request->jenis_kelamin,

            'tempat_lahir'  => $request->tempat_lahir,

            'tanggal_lahir' => $request->tanggal_lahir,

            'tinggi_badan'  => $request->tinggi_badan,

            'berat_badan'   => $request->berat_badan,

            'alamat'        => $request->alamat,

            'hasil_diagnosa'=> $request->hasil_diagnosa,

            'persentase'    => $request->persentase
        ]);

        return redirect('/admin/konsultasi')
            ->with('success', 'Data berhasil diupdate');
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);

        $konsultasi->delete();

        return redirect('/admin/konsultasi')
            ->with('success', 'Data berhasil dihapus');
    }
}