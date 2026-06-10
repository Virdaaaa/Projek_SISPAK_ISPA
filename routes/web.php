<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;

/*
|--------------------------------------------------------------------------
| HALAMAN LOGIN
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
| Form Data Diri
*/

Route::get('/user', function () {

    return view('user.formdata');

});

/*
| Simpan data diri + tampil pertanyaan pertama
*/

Route::post(
    '/diagnosa',
    [DiagnosaController::class, 'index']
);

/*
| Next pertanyaan diagnosa
*/

Route::post(
    '/diagnosa/next',
    [DiagnosaController::class, 'next']
);

/*
| Halaman hasil diagnosa
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

Route::get('/admin', function () {

    return view('admin.dashboard');

});