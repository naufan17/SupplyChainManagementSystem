@extends('layouts.newmain')

@section('title', 'Retail')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Permintaan Pesanan</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#kirimPermintaan">
            Kirim Permintaan
        </button>
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
                        <th>Konfirmasi</th>
                    </tr>
                </thead>
                @foreach($permintaanPesanans as $permintaanPesanan)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $permintaanPesanan->id_pesanan }}</td>
                        <td>{{ $permintaanPesanan->id_retail }}</td>
                        <td>{{ $permintaanPesanan->barang }}</td>
                        <td>{{ $permintaanPesanan->jumlah}}</td>
                        <td>{{ $permintaanPesanan->alamat }}</td>
                        <td>Menunggu kofirmasi</td>
                        <td>
                            <a href="delete-pesanan/{{ $permintaanPesanan->id_pesanan }}" type="button" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2 mb-5">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Retail</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#tambahRetail">
            Tambah Retail
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ID Retail</th>
                        <th>Nama Retail</th>
                    </tr>
                </thead>
                @foreach($retails as $retail)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $retail->id_retail }}</td>
                        <td>{{ $retail->retail }}</td>                                    
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="kirimPermintaan" tabindex="-1" aria-labelledby="kirimPermintaanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kirimPermintaanLabel">Kirim Permintaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('send-pesanan') }}" method="POST">
                @csrf
                    <div class="form-group">
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
                        <button type="send" class="btn btn-primary">Kirim Permintaan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahRetail" tabindex="-1" aria-labelledby="tambahRetailLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahRetailLabel">Tambah Retail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('create-retail') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputRetail" >Retail</label>
                        <input type="text" id="inputRetail" name="retail" class="form-control mb-3" placeholder="Retail" required>
                        <button type="send" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection