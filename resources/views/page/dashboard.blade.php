@extends('layouts.main ')

@section('title', 'Dashboard')

@section('main')


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> 
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom">
            <h1 class="h4">Dashboard</h1>
        </div>
        <div class="card-columns">
            <div class="card bg-primary text-white text-center p-1">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h5 class="card-title">50</h5>
                        <span ></span>
                        <p class="card-text">Produksi Barang</p>
                    </blockquote>
                </div>   
            </div>
            <div class="card bg-success text-white text-center p-1">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h5 class="card-title">90</h5>
                        <p class="card-text">Barang Tejual</p>
                    </blockquote>
                </div>   
            </div>
            <div class="card bg-danger text-white text-center p-1">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h5 class="card-title">38</h5>
                        <p class="card-text">Pelanggan</p>
                    </blockquote>
                </div>   
            </div>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </div>
</main>
@endsection