@extends('layouts.newmain')

@section('title', 'Distributor')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Permintaan Pesanan</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Pesanan</th>
                        <th>ID Retail</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th>Kirim</th>
                    </tr>
                </thead>
                @foreach($permintaanPesanans as $permintaanPesanan)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $permintaanPesanan->id_pesanan }}</td>
                        <td>{{ $permintaanPesanan->id_retail }}</td>
                        <td>{{ $permintaanPesanan->barang }}</td>
                        <td>{{ $permintaanPesanan->jumlah }}</td>
                        <td>{{ $permintaanPesanan->alamat }}</td>
                        <td>Menunggu Persetujuan</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm">
                                Terima
                            </button>
                            <button type="button" class="btn btn-danger btn-sm">
                                Tolak
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#kirimBarang">
                                Kirim Barang
                            </button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</main>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2 mb-5">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Distributor</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#tambahDistributor">
            Tambah Distributor
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ID Distributor</th>
                        <th>Nama Distributor</th>
                    </tr>
                </thead>
                @foreach($distributors as $distributor)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $distributor->id_distributor }}</td>
                        <td>{{ $distributor->distributor }}</td>                                    
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="kirimBarang" tabindex="-1" aria-labelledby="kirimBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kirimBarangLabel">Kirim Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('send-pesanan') }}" method="POST">
                @csrf
                    <div class="form-group">
                    <label for="inputIDPesanan">ID Pesanan</label>
                        <select type="text" name="IDpesanan" id="inputIDPesanan" class="form-control mb-3" placeholder="IDPesanan" required autofocus>
                        @foreach($permintaanPesanans as $permintaanPesanan)
                            <option>{{ $permintaanPesanan->id_pesanan }}</option>
                            @endforeach
                        </select>
                        <label for="inputIDRetail">ID Retail</label>
                        <select type="text" name="IDretail" id="inputIDRetail" class="form-control mb-3" placeholder="IDRetail" required autofocus>
                            @foreach($retails as $retail)
                            <option>{{ $retail->id_retail }}</option>
                            @endforeach
                        </select>
                        <label for="inputBarang">Barang</label>
                        <input type="text" name="barang" id="inputBarang" class="form-control mb-3" placeholder="Barang" required autofocus>
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <label for="inputAlamat">Alamat</label>
                        <input type="text" name="alamat" id="inputAlamat" class="form-control mb-3" placeholder="Alamat" required autofocus>
                        <button type="send" class="btn btn-primary">Kirim Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahDistributor" tabindex="-1" aria-labelledby="tambahDistributorLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDistributorLabel">Tambah Distributor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('create-distributor') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputDistributor">Distributor</label>
                        <input type="text" id="inputDistributor" name="distributor" class="form-control mb-3" placeholder="Distributor" required>
                        <button type="send" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection