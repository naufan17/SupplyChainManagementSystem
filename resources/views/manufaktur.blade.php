@extends('layouts.newmain')

@section('title', 'Manufaktur')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Stok Pasokan</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#produksiBarang">
            Produksi Barang
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Pasokan</th>
                        <th>ID Manufaktur</th>
                        <th>Pasokan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                @foreach($stokPasokans as $stokPasokan)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stokPasokan->id_pasokan }}</td>
                        <td>{{ $stokPasokan->id_manufaktur }}</td>
                        <td>{{ $stokPasokan->pasokan }}</td>
                        <td>{{ $stokPasokan->jumlah }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</main>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Stok Barang</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>ID Manufaktur</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                @foreach($stokBarangs as $stokBarang)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stokBarang->id_barang }}</td>
                        <td>{{ $stokBarang->id_manufaktur }}</td>
                        <td>{{ $stokBarang->barang }}</td>
                        <td>{{ $stokBarang->jumlah }}</td>
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
            <h1 class="h4">Manufaktur</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#tambahManufaktur">
            Tambah Manufaktur
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ID Manufaktur</th>
                        <th>Nama Manufaktur</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                </thead>
                @foreach($manufakturs as $manufaktur)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $manufaktur->id_manufaktur }}</td>
                        <td>{{ $manufaktur->manufaktur }}</td>
                        <!-- <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                Edit
                            </button>
                            <a href="delete-manufaktur/{{ $manufaktur->id_manufaktur }}" type="button" class="btn btn-danger btn-sm">Hapus</a>
                        </td>                                       -->
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="produksiBarang" tabindex="-1" aria-labelledby="produksiBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="produksiBarangLabel">Produksi Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-barang') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="inputIDManufaktur">ID Manufaktur</label>
                        <select type="text" name="IDmanufaktur" id="inputIDManufaktur" class="form-control mb-3" placeholder="IDManufaktur" required autofocus>
                            @foreach($manufakturs as $manufaktur)
                            <option>{{ $manufaktur->id_manufaktur }}</option>
                            @endforeach
                        </select>  
                        <label for="inputbarang">Barang</label>
                        <input type="text" name="barang" id="inputbarang" class="form-control mb-3" placeholder="barang" required autofocus>
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="btn btn-primary">Produksi Barang</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahManufaktur" tabindex="-1" aria-labelledby="tambahManufakturLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahManufakturLabel">Tambah Manufaktur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-manufaktur') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputManufaktur">Manufaktur</label>
                        <input type="text" id="inputManufaktur" name="manufaktur" class="form-control mb-3" placeholder="Manufaktur" required>
                        <button type="send" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection