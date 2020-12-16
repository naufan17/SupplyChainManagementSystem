@extends('layouts.main ')

@section('title', 'Kirim Permintaan')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Kirim Permintaan</h1>
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
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Alamat</th>
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
                        <td>Sleman</td>
                        <td>Menunggu Persetujuan</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">
                                Batal
                            </button>
                        </td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>13</td>
                        <td>Tas</td>
                        <td>10</td>
                        <td>Sleman</td>
                        <td>Menunggu Persetujuan</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">
                                Batal
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>14</td>
                            <td>Baju</td>
                        <td>15</td>
                        <td>Sleman</td>
                        <td>Menunggu Persetujuan</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">
                                Batal
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>15</td>
                            <td>Kaos Kaki</td>
                        <td>12</td>
                        <td>Sleman</td>
                        <td>Menunggu Persetujuan</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">
                                Batal
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>16</td>
                        <td>Celana</td>
                        <td>15</td>
                        <td>Sleman</td>
                        <td>Menunggu Persetujuan</td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm">
                                Batal
                            </button>
                        </td>
                    </tr>
                </tbody>
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
                <form>
                    <div class="form-group">
                    <label for="inputBarang" class="sr-only">Barang</label>
                        <input type="barang" id="inputBarang" class="form-control mb-3" placeholder="Barang" required autofocus>
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