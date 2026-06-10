<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if (
            $request->username == 'admin' &&
            $request->password == 'admin123'
        ) {

            session([
                'admin_id' => 1,
                'admin_nama' => 'Administrator'
            ]);

            return redirect('/admin/dashboard');
        }

        return back()
            ->with('error', 'Username atau Password salah');
    }

    public function logout()
    {
        session()->forget([
            'admin_id',
            'admin_nama'
        ]);

        return redirect('/');
    }
}