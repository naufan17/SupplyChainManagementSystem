<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/logon', function () {
    return view('page.login');
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/pasokan', function () {
    return view('page.pasokan');
});

Route::get('/kirimPasokan', function () {
    return view('page.kirimPasokan');
});

Route::get('/kiriman', function () {
    return view('page.kiriman');
});

Route::get('/stokPasokan', function () {
    return view('page.stokPasokan');
});

Route::get('/produksi', function () {
    return view('page.produksi');
});

Route::get('/stokBarang', function () {
    return view('page.StokBarang');
});

Route::get('/pesanan', function () {
    return view('page.pesanan');
});

Route::get('/kirimBarang', function () {
    return view('page.kirimBarang');
});

Route::get('/permintaan', function () {
    return view('page.permintaan');
});

Route::get('/konfirmasi', function () {
    return view('page.konfirmasi');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
