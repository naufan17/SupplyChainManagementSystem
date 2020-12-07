@extends('layouts.main ')

@section('title', 'Dashboard')

@section('main')

<main>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Nama Perusahaan</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ url('/login') }}">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pasokan') }}">
                                <span data-feather="plus-circle"></span>
                                Tambah Pasokan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kirimPasokan') }}">
                                <span data-feather="truck"></span>
                                Kirim Pasokan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kiriman') }}">
                                <span data-feather="package"></span>
                                Kiriman Pasokan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/stokPasokan') }}">
                                <span data-feather="clipboard"></span>
                                Stok Pasokan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/produksi') }}">
                                <span data-feather="shopping-cart"></span>
                                Produksi Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/stokBarang') }}">
                                <span data-feather="clipboard"></span>
                                Stok Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pesanan') }}">
                                <span data-feather="log-in"></span>
                                Permintaan Pesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kirimBarang') }}">
                                <span data-feather="truck"></span>
                                Kirim Barang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/permintaan') }}">
                                <span data-feather="mail"></span>
                                Kirim Permintaan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/konfirmasi') }}">
                                <span data-feather="package"></span>
                                Konfirmasi Pesanan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h4">Dashboard</h1>
                    </div>
                </div>
            </main>
        </div>
    </div>
</main>       
@endsection