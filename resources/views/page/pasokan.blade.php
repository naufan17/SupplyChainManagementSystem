@extends('layouts.main ')

@section('title', 'Tambah Pasokan')

@section('main')

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
                        <td>(Nama Supplier)</td>                                    
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
                        <td>(Nama Supplier)</td>                                    
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
                        <td>(Nama Supplier)</td>                                    
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
                        <td>(Nama Supplier)</td>                                    
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
                        <td>(Nama Supplier)</td>                                    
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