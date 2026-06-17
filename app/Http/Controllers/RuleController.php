<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Penyakit;
use App\Models\Gejala;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN RULE
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $rules = Rule::with(
            'penyakit',
            'gejala'
        )->get();

        $penyakits = Penyakit::all();

        $gejalas = Gejala::all();

        return view(
            'admin.rule',
            compact(
                'rules',
                'penyakits',
                'gejalas'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

        public function store(Request $request)
    {
        $request->validate([

            'penyakit_id' => 'required',
            'gejala_id'   => 'required',
            'bobot'       => 'required|numeric|min:0|max:1'
        ]);

        Rule::create([

            'penyakit_id'    => $request->penyakit_id,

            'gejala_id'      => $request->gejala_id,

            'bobot'          => $request->bobot,

            'is_gejala_inti' => $request->is_gejala_inti ?? 0
        ]);

        return redirect()->back()
            ->with('success', 'Rule berhasil ditambahkan');
    }

    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $rule = Rule::findOrFail($id);

        $rule->update([

            'penyakit_id' => $request->penyakit_id,

            'gejala_id' => $request->gejala_id,

            'bobot' => $request->bobot,

            'is_gejala_inti' =>
                $request->is_gejala_inti
                ?? 0
        ]);

        return redirect()->back();
    }

    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $rule = Rule::findOrFail($id);

        $rule->delete();

        return redirect()->back();
    }
}
