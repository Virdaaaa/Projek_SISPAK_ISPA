```php
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\KonsultasiController;

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get(
    '/',
    [AdminController::class, 'loginForm']
);

Route::post(
    '/login',
    [AdminController::class, 'login']
);

Route::get(
    '/logout',
    [AdminController::class, 'logout']
);

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::get('/user', function () {

    return view('user.formdata');

});

Route::post(
    '/diagnosa',
    [DiagnosaController::class, 'index']
);

Route::post(
    '/next-diagnosa',
    [DiagnosaController::class, 'next']
);

Route::get(
    '/hasil/{id}',
    [DiagnosaController::class, 'hasil']
);

/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

 Route::get('/admin', [AdminController::class, 'loginForm']);

Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/dashboard', function () {

    if (!session()->has('admin_id')) {
        return redirect('/admin');
    }

/*
|--------------------------------------------------------------------------
| PENYAKIT
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/penyakit',
    [PenyakitController::class, 'index']
);

Route::post(
    '/admin/penyakit/store',
    [PenyakitController::class, 'store']
);

Route::put(
    '/admin/penyakit/{id}',
    [PenyakitController::class, 'update']
);

Route::delete(
    '/admin/penyakit/{id}',
    [PenyakitController::class, 'destroy']
);

/*
|--------------------------------------------------------------------------
| GEJALA
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/gejala',
    [GejalaController::class, 'index']
);

Route::post(
    '/admin/gejala/store',
    [GejalaController::class, 'store']
);

Route::put(
    '/admin/gejala/update/{id}',
    [GejalaController::class, 'update']
);

Route::delete(
    '/admin/gejala/delete/{id}',
    [GejalaController::class, 'destroy']
);

/*
|--------------------------------------------------------------------------
| RULE
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/rule',
    [RuleController::class, 'index']
);

Route::post(
    '/admin/rule/store',
    [RuleController::class, 'store']
);

Route::put(
    '/admin/rule/update/{id}',
    [RuleController::class, 'update']
);

Route::delete(
    '/admin/rule/delete/{id}',
    [RuleController::class, 'destroy']
);

/*
|--------------------------------------------------------------------------
| KONSULTASI
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/konsultasi',
    [KonsultasiController::class, 'index']
);

Route::put(
    '/admin/konsultasi/update/{id}',
    [KonsultasiController::class, 'update']
);

Route::delete(
    '/admin/konsultasi/delete/{id}',
    [KonsultasiController::class, 'destroy']
);

});

Route::get('/admin/logout', [AdminController::class, 'logout']);
