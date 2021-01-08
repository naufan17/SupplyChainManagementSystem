@extends('layouts.newmain')

@section('title', 'Supplier')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Tambah Pasokan</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#tambahPasokan">
            Tambah Pasokan
        </button>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3 ml-4" data-toggle="modal" data-target="#kirimPasokan">
            Kirim Pasokan
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Pasokan</th>
                        <th>ID Supplier</th>
                        <th>Pasokan</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($stokPasokans as $stokPasokan)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $stokPasokan->id_pasokan }}</td>
                        <td>{{ $stokPasokan->id_supplier }}</td>                                    
                        <td>{{ $stokPasokan->pasokan }}</td>
                        <td>{{ $stokPasokan->jumlah }}</td>
                        <td>
                            <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editPasokan">
                                Edit
                            </button> -->
                            <a href="delete-pasokan/{{ $stokPasokan->id_pasokan }}" type="button" class="btn btn-danger btn-sm">Hapus</a>
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
            <h1 class="h4">Supplier</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#tambahSupplier">
            Tambah Supplier
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>ID Supplier</th>
                        <th>Nama Supplier</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                </thead>
                @foreach($suppliers as $supplier)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supplier->id_supplier }}</td>
                        <td>{{ $supplier->supplier }}</td>   
                        <!-- <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">
                                Edit
                            </button>
                            <a href="delete-supplier/{{ $supplier->id_supplier }}" type="button" class="btn btn-danger btn-sm">Hapus</a>
                        </td>                                  -->
                    </tr>
                </tbody>
                @endforeach
            </table>
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
                <form action="{{ url('store-pasokan') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="inputIDSupplier">ID Supplier</label>
                        <select type="text" name="IDsupplier" id="inputIDSupplier" class="form-control mb-3" placeholder="IDSupplier" required autofocus>
                            @foreach($suppliers as $supplier)
                            <option>{{ $supplier->id_supplier }}</option>
                            @endforeach
                        </select>  
                        <label for="inputPasokan">Pasokan</label>
                        <input type="text" name="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="btn btn-primary">Tambah Pasokan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kirimPasokan" tabindex="-1" aria-labelledby="kirimPasokanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kirimPasokanLabel">kirim Pasokan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('send-pasokan') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="inputIDManufaktur">ID Manufaktur</label>
                        <select type="text" name="IDmanufaktur" id="inputIDManufaktur" class="form-control mb-3" placeholder="IDManufaktur" required autofocus>
                            @foreach($manufakturs as $manufaktur)
                            <option>{{ $manufaktur->id_manufaktur }}</option>
                            @endforeach
                        </select>
                        <label for="inputPasokan">Pasokan</label>
                        <input type="text" name="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="btn btn-primary">Kirim Pasokan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="editPasokan" tabindex="-1" aria-labelledby="editPasokanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPasokanLabel">Edit Pasokan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-pasokan', $stokPasokan->id_pasokan) }}" method="GET">
                @csrf
                    <div class="form-group">
                        <label for="inputIDSupplier" class="sr-only">ID Supplier</label>
                        <select type="text" name="IDsupplier" id="inputIDSupplier" class="form-control mb-3" placeholder="IDSupplier" value="{{ $stokPasokan->id_supplier }}" required autofocus>
                            @foreach($suppliers as $supplier)
                            <option>{{ $supplier->id_supplier }}</option>
                            @endforeach
                        </select>  
                        <label for="inputPasokan" class="sr-only">Pasokan</label>
                        <input type="text" name="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                        <label for="inputJumlah" class="sr-only">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="btn btn-primary">Edit Pasokan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade" id="tambahSupplier" tabindex="-1" aria-labelledby="tambahSupplierLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahSupplierLabel">Tambah Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('store-supplier') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputSupplier">Supplier</label>
                        <input type="text" id="inputSupplier" name="supplier" class="form-control mb-3" placeholder="Supplier" required>
                        <button type="send" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection