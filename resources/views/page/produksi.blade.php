@extends('layouts.main ')

@section('title', 'Produksi Barang')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Produksi Barang</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#exampleModal">
            Produksi Barang
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Manufaktur</th>
                        <th>Kode Pasokan</th>
                        <th>Pasokan</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tr>
                        <td>1</td>
                        <td>(Nama Manufaktur)</td>
                        <td>36</td>
                        <td>Kain</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>(Nama Manufaktur)</td>
                        <td>37</td>
                        <td>Benang</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>(Nama Manufaktur)</td>
                        <td>38</td>
                        <td>Sablon</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>(Nama Manufaktur)</td>
                        <td>39</td>
                        <td>Tali Sepatu</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>(Nama Manufaktur)</td>
                        <td>40</td>
                        <td>Sol Sepatu</td>
                        <td>10</td>
                    </tr> 
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Manufaktur</th>
                        <th>Kode Produksi</th>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                        <td>1</td>
                        <td>(Nama Manufaktur)</td>
                        <td>257</td>
                        <td>116</td>
                        <td>Sepatu</td>
                        <td>5</td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>(Nama Manufaktur)</td>
                        <td>258</td>
                        <td>117</td>
                        <td>Tas</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>(Nama Manufaktur)</td>
                        <td>259</td>
                        <td>118</td>
                        <td>Baju</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>(Nama Manufaktur)</td>
                        <td>260</td>
                        <td>119</td>
                        <td>Kaos Kaki</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>(Nama Manufaktur)</td>
                        <td>261</td>
                        <td>120</td>
                        <td>Celana</td>
                        <td>15</td>
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
                <h5 class="modal-title" id="exampleModalLabel">Produksi Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                    <label for="inputManufaktur" class="sr-only">Manufaktur</label>
                        <input type="manufaktur" id="inputManufaktur" class="form-control mb-3" placeholder="Manufaktur" required>
                        <label for="inputPasokan" class="sr-only">Pasokan</label>
                        <select type="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                            <option>Kain</option>
                            <option>Benang</option>
                            <option>Sablon</option>
                            <option>Tali Sepatu</option>
                            <option>Sol Sepatu</option>
                        </select>
                        <label for="inputJumlahPasokan" class="sr-only">Jumlah Pasokan</label>
                        <input type="jumlahPasokan" id="inputJumlahPasokan" class="form-control mb-3" placeholder="Jumlah Pasokan" required>
                        <label for="inputBarang" class="sr-only">Barang</label>
                        <input type="barang" id="inputBarang" class="form-control mb-3" placeholder="Barang" required autofocus>
                        <label for="inputJumlahBarang" class="sr-only">Jumlah Barang</label>
                        <input type="jumlahBarang" id="inputJumlahBarang" class="form-control mb-3" placeholder="Jumlah Barang" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Produksi</button>
            </div>
        </div>
    </div>
</div>
@endsection