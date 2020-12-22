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

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/pasokan', function () {
        return view('supplier.pasokan');
    });
    Route::get('/kirimPasokan', function () {
        return view('supplier.kirimPasokan');
    });
    Route::get('/kiriman', function () {
        return view('manufaktur.kiriman');
    });
    Route::get('/stokPasokan', function () {
        return view('manufaktur.stokPasokan');
    });
    Route::get('/produksi', function () {
        return view('manufaktur.produksi');
    });
    Route::get('/stokBarang', function () {
        return view('manufaktur.stokBarang');
    });
    Route::get('/pesanan', function () {
        return view('distributor.pesanan');
    });
    Route::get('/kirimBarang', function () {
        return view('distributor.kirimBarang');
    });
    Route::get('/permintaan', function () {
        return view('retail.permintaan');
    });
    Route::get('/konfirmasi', function () {
        return view('retail.konfirmasi');
    });
});

Route::get('/', function () {
    return view('auth.login');
});