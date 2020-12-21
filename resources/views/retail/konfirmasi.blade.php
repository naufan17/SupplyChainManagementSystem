@extends('layouts.main ')

@section('title', 'Konfirmasi Pesanan')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Konfirmasi Pesanan</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Kode Pesanan</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12</td>
                        <td>Sepatu</td>
                        <td>5</td>
                        <td>Sudah Sampai</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>13</td>
                        <td>Tas</td>
                        <td>10</td>
                        <td>Sudah Sampai</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>14</td>
                        <td>Baju</td>
                        <td>15</td>
                        <td>Sudah Sampai</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>15</td>
                        <td>Kaos Kaki</td>
                        <td>12</td>
                        <td>Sudah Sampai</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>16</td>
                        <td>Celana</td>
                        <td>15</td>
                        <td>Sudah Sampai</td>
                        <td>
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Konfirmasi
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection