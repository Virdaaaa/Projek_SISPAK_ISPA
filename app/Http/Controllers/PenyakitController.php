<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN DATA PENYAKIT
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $penyakits = Penyakit::all();

        return view(
            'admin.penyakit',
            compact('penyakits')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | TAMBAH PENYAKIT
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        Penyakit::create([

            'kode_penyakit' => $request->kode_penyakit,

            'nama_penyakit' => $request->nama_penyakit,

            'deskripsi'     => $request->deskripsi,

            'solusi'        => $request->solusi

        ]);

        return redirect('/admin/penyakit');
    }

    /*
    |--------------------------------------------------------------------------
    | EDIT PENYAKIT
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $penyakit = Penyakit::find($id);

        $penyakit->update([

            'kode_penyakit' => $request->kode_penyakit,

            'nama_penyakit' => $request->nama_penyakit,

            'deskripsi'     => $request->deskripsi,

            'solusi'        => $request->solusi

        ]);

        return redirect('/admin/penyakit');
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE PENYAKIT
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        Penyakit::find($id)->delete();

        return redirect('/admin/penyakit');
    }
}