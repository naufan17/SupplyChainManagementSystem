<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ManufakturController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\RetailController;

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

Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [DashboardController::class, 'index']);
    
    Route::get('supplier', [SupplierController::class, 'index']);
    Route::post('store-supplier', [SupplierController::class, 'storesupplier']);
    Route::post('store-pasokan', [SupplierController::class, 'storePasokan']);
    Route::post('send-pasokan', [SupplierController::class, 'sendPasokan']);
    // Route::get('delete-supplier/{id}', [SupplierController::class, 'deleteSupplier']);
    Route::get('delete-pasokan/{id}', [SupplierController::class, 'deletePasokan']);
    Route::get('update-pasokan/{pasokan}', [SupplierController::class, 'updatePasokan']);

    Route::get('manufaktur', [ManufakturController::class, 'index']);
    Route::post('store-manufaktur', [ManufakturController::class, 'storeManufaktur']);
    Route::post('store-barang', [ManufakturController::class, 'storeBarang']);
    // Route::get('delete-manufaktur/{id}', [ManufakturController::class, 'deleteManufaktur']);
    
    Route::get('distributor', [DistributorController::class, 'index']);
    Route::post('create-distributor', [DistributorController::class, 'storeDistributor']);
    
    Route::get('retail', [RetailController::class, 'index']);    
    Route::post('create-retail', [RetailController::class, 'storeRetail']);
    Route::post('send-pesanan', [RetailController::class, 'sendPesanan']);
    Route::get('delete-pesanan/{id}', [RetailController::class, 'deletePesanan']);
    
    // Route::get('dashboard', function () {
    //     return view('dashboard');
    // });
    // Route::get('supplier', function () {
    //     return view('supplier');
    // });
    // Route::get('manufaktur', function () {
    //     return view('manufaktur');
    // });
    // Route::get('distributor', function () {
    //     return view('distributor');
    // });
    // Route::get('retail', function () {
    //     return view('retail');
    // });

    // Route::get('pasokan', function () {
    //     return view('supplier.pasokan');
    // });
    // Route::get('kirimPasokan', function () {
    //     return view('supplier.kirimPasokan');
    // });
    // Route::get('kiriman', function () {
    //     return view('manufaktur.kiriman');
    // });
    // Route::get('stokPasokan', function () {
    //     return view('manufaktur.stokPasokan');
    // });
    // Route::get('produksi', function () {
    //     return view('manufaktur.produksi');
    // });
    // Route::get('stokBarang', function () {
    //     return view('manufaktur.stokBarang');
    // });
    // Route::get('pesanan', function () {
    //     return view('distributor.pesanan');
    // });
    // Route::get('kirimBarang', function () {
    //     return view('distributor.kirimBarang');
    // });
    // Route::get('permintaan', function () {
    //     return view('retail.permintaan');
    // });
    // Route::get('konfirmasi', function () {
    //     return view('retail.konfirmasi');
    // });
});

Route::redirect('', 'login');