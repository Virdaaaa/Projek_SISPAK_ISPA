<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | FORM LOGIN
    |--------------------------------------------------------------------------
    */

    public function loginForm()
    {
        return view('auth.login');
    }

    /*
    |--------------------------------------------------------------------------
    | PROSES LOGIN
    |--------------------------------------------------------------------------
    */

    public function login(Request $request)
    {
        $admin = Admin::where(
            'username',
            $request->username
        )->first();

        if (!$admin) {

            return back()->with(
                'error',
                'Username tidak ditemukan'
            );
        }

        if ($request->password != $admin->password) {

            return back()->with(
                'error',
                'Password salah'
            );
        }

        session([

            'admin_id' => $admin->id,

            'admin_nama' => $admin->nama
        ]);

        return redirect('/admin');
    }

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        if (!session()->has('admin_id')) {

            return redirect('/');
        }

        $totalPenyakit = \App\Models\Penyakit::count();

        $totalGejala = \App\Models\Gejala::count();

        $totalRule = \App\Models\Rule::count();

        $totalKonsultasi = \App\Models\Konsultasi::count();

        return view(
            'admin.dashboard',
            compact(
                'totalPenyakit',
                'totalGejala',
                'totalRule',
                'totalKonsultasi'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    public function logout()
    {
        session()->flush();


        return redirect('/');
    }}