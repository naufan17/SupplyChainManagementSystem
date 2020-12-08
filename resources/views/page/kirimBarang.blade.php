@extends('layouts.main ')

@section('title', 'Kirim Barang')

@section('main')

<main>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Nama Perusahaan</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{ url('/login') }}">Keluar</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                <span>Supplier</span>
                            </h6>             
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
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                <span>Maufaktur</span>
                            </h6>   
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
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                <span>Distributor</span>
                            </h6>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/pesanan') }}">
                                <span data-feather="log-in"></span>
                                Permintaan Pesanan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('/kirimBarang') }}">
                                <span data-feather="truck"></span>
                                Kirim Barang
                            </a>
                        </li>
                        <li>
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white">
                                <span>Retail</span>
                            </h6>
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
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h4">Kirim Barang</h1>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#exampleModal">
                        Kirim Barang
                    </button>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Sepatu</td>
                                    <td>5</td>
                                </tr>
                                    <tr>
                                    <td>2</td>
                                    <td>Tas</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Baju</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kaos Kaki</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Celana</td>
                                    <td>15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kirim Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputBarang" class="sr-only">Nama Barang</label>
                        <select type="barang" id="inputBarang" class="form-control mb-3" placeholder="Nama Barang" required autofocus>
                            <option>Sepatu</option>
                            <option>Tas</option>
                            <option>Baju</option>
                            <option>Kaos Kaki</option>
                            <option>Celana</option>
                        </select>
                        <label for="inputJumlah" class="sr-only">Jumlah</label>
                        <input type="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <label for="inputAlamat" class="sr-only">Alamat</label>
                        <input type="alamat" id="inputAlamat" class="form-control mb-3" placeholder="Alamat" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
</div>
@endsection