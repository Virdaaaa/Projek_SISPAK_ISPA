<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN GEJALA
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $gejalas = Gejala::all();

        return view(
            'admin.gejala',
            compact('gejalas')
        );
    }

    /*
    |--------------------------------------------------------------------------
    | TAMBAH GEJALA
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $request->validate([

            'kode_gejala' => 'required',

            'nama_gejala' => 'required'
        ]);

        Gejala::create([

            'kode_gejala' => $request->kode_gejala,

            'nama_gejala' => $request->nama_gejala
        ]);

        return redirect()->back();
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE GEJALA
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $request->validate([

            'kode_gejala' => 'required',

            'nama_gejala' => 'required'
        ]);

        $gejala = Gejala::findOrFail($id);

        $gejala->update([

            'kode_gejala' => $request->kode_gejala,

            'nama_gejala' => $request->nama_gejala
        ]);

        return redirect()->back();
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE GEJALA
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);

        $gejala->delete();

        return redirect()->back();
    }
}