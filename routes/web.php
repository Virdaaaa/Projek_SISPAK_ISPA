<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return view('auth.login');

});

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Form Data Diri
|--------------------------------------------------------------------------
*/

Route::get('/user', function () {

    return view('user.formdata');

});

/*
|--------------------------------------------------------------------------
| Simpan Data Diri
| Tampilkan Pertanyaan Pertama
|--------------------------------------------------------------------------
*/

Route::post(
    '/diagnosa',
    [DiagnosaController::class, 'index']
);

/*
|--------------------------------------------------------------------------
| Next Pertanyaan Diagnosa
|--------------------------------------------------------------------------
*/

Route::post(
    '/next-diagnosa',
    [DiagnosaController::class, 'next']
);

/*
|--------------------------------------------------------------------------
| Halaman Hasil Diagnosa
|--------------------------------------------------------------------------
*/

Route::get(
    '/hasil/{id}',
    [DiagnosaController::class, 'hasil']
);

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

 Route::get('/admin', [AdminController::class, 'loginForm']);

Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/dashboard', function () {

    if (!session()->has('admin_id')) {
        return redirect('/admin');
    }

    return view('admin.dashboard');

});

Route::get('/admin/logout', [AdminController::class, 'logout']);