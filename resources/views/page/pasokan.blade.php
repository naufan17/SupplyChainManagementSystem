@extends('layouts.main ')

@section('title', 'Tambah Pasokan')

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
                            <a class="nav-link active" href="{{ url('/pasokan') }}">
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
                                <span>Manufaktur</span>
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
                            <a class="nav-link" href="{{ url('/kirimBarang') }}">
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
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h4">Tambah Pasokan</h1>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#tambahPasokan">
                        Tambah Pasokan
                    </button>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Supplier</th>
                                    <th>Kode Pasokan</th>
                                    <th>Pasokan</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>........(Nama Supplier)</td>                                    
                                    <td>36</td>
                                    <td>Kain</td>
                                    <td>15</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>........(Nama Supplier)</td>                                    
                                    <td>37</td>
                                    <td>Benang</td>
                                    <td>13</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>........(Nama Supplier)</td>                                    
                                    <td>38</td>
                                    <td>Sablon</td>
                                    <td>14</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>........(Nama Supplier)</td>                                    
                                    <td>39</td>
                                    <td>Tali Sepatu</td>
                                    <td>9</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>........(Nama Supplier)</td>                                    
                                    <td>40</td>
                                    <td>Sol Sepatu</td>
                                    <td>10</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </td>
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
<div class="modal fade" id="tambahPasokan" tabindex="-1" aria-labelledby="tambahPasokanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPasokanLabel">Tambah Pasokan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputSupplier" class="sr-only">Supplier</label>
                        <input type="supplier" id="inputSupplier" class="form-control mb-3" placeholder="Supplier" required autofocus>
                        <label for="inputPasokan" class="sr-only">Pasokan</label>
                        <input type="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                        <label for="inputJumlah" class="sr-only">Jumlah</label>
                        <input type="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit Pasokan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputPasokan" class="sr-only">Pasokan</label>
                        <input type="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                        <label for="inputJumlah" class="sr-only">Jumlah</label>
                        <input type="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Edit</button>
            </div>
        </div>
    </div>
</div>
@endsection