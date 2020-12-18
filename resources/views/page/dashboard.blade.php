@extends('layouts.main ')

@section('title', 'Dashboard')

@section('main')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> 
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom">
            <h1 class="h4">Dashboard</h1>
        </div>
        <div class="card-deck">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Produksi Barang</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                </div>
            </div>
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Barang Terjual</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
                </div>
            </div>
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Pelanggan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection