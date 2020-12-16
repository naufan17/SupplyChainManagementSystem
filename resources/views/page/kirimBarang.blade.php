@extends('layouts.main ')

@section('title', 'Kirim Barang')

@section('main')

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
                        <th>Distributor</th>
                        <th>Kode Pengiriman</th>
                        <th>Kode Pesanan</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Alamat</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>(Nama Distributor)</td>
                        <td>123</td>
                        <td>11</td>
                        <td>Sepatu</td>
                        <td>5</td>
                        <td>Sleman</td>
                        <td>Terkirim</td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>(Nama Distributor)</td>
                        <td>124</td>
                        <td>12</td>
                        <td>Tas</td>
                        <td>10</td>
                        <td>Sleman</td>
                        <td>Terkirim</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>(Nama Distributor)</td>
                        <td>125</td>
                        <td>13</td>
                        <td>Baju</td>
                        <td>15</td>
                        <td>Sleman</td>
                        <td>Terkirim</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>(Nama Distributor)</td>
                        <td>126</td>
                        <td>14</td>
                        <td>Kaos Kaki</td>
                        <td>12</td>
                        <td>Sleman</td>
                        <td>Terkirim</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>(Nama Distributor)</td>
                        <td>127</td>
                        <td>15</td>
                        <td>Celana</td>
                        <td>15</td>
                        <td>Sleman</td>
                        <td>Terkirim</td>
                    </tr>
                </tbody>
            </table>
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
                        <label for="inputDistributor" class="sr-only">Distributor</label>
                        <input type="distributor" id="inputDistributor" class="form-control mb-3" placeholder="Distributor" required autofocus>
                        <label for="inputpesanan" class="sr-only">Kode Pesanan</label>
                        <select type="pesanan" id="inputpesanan" class="form-control mb-3" placeholder="Kode Pesanan" required autofocus>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                        </select>
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