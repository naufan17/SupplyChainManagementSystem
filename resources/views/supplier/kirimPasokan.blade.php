@extends('layouts.main ')

@section('title', 'Kirim Pasokan')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Kirim Pasokan</h1>
        </div>
        <button type="button" class="btn btn-primary btn-sm pb-2 mb-3" data-toggle="modal" data-target="#exampleModal">
            Kirim Pasokan
        </button>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Supplier</th>
                        <th>Kode Pengiriman</th>
                        <th>Kode Pasokan</th>
                        <th>Pasokan</th>
                        <th>Jumlah</th>
                        <th>Manufaktur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>(Nama Supplier)</td>                                    
                        <td>00001</td>
                        <td>36</td>
                        <td>Kain</td>
                        <td>15</td>
                        <td>(Nama Manufaktur)</td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>(Nama Supplier)</td>                                    
                        <td>00002</td>
                        <td>37</td>
                        <td>Benang</td>
                        <td>13</td>
                        <td>(Nama Manufaktur)</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>(Nama Supplier)</td>                                    
                        <td>00003</td>
                        <td>38</td>
                        <td>Sablon</td>
                        <td>14</td>
                        <td>(Nama Manufaktur)</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>(Nama Supplier)</td>                                    
                        <td>00004</td>
                        <td>39</td>
                        <td>Tali Sepatu</td>
                        <td>9</td>
                        <td>(Nama Manufaktur)</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>(Nama Supplier)</td>                                    
                        <td>00005</td>
                        <td>40</td>
                        <td>Sol Sepatu</td>
                        <td>10</td>
                        <td>(Nama Manufaktur)</td>
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
                <h5 class="modal-title" id="exampleModalLabel">Kirim Pasokan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputSupplier" class="sr-only">Supplier</label>
                        <input type="supplier" id="inputSupplier" class="form-control mb-3" placeholder="Supplier" required>
                        <label for="inputPasokan" class="sr-only">Pasokan</label>
                        <select type="pasokan" id="inputPasokan" class="form-control mb-3" placeholder="Pasokan" required autofocus>
                            <option>Kain</option>
                            <option>Benang</option>
                            <option>Sablon</option>
                            <option>Tali Sepatu</option>
                            <option>Sol Sepatu</option>
                        </select>
                        <label for="inputJumlah" class="sr-only">Jumlah</label>
                        <input type="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <label for="inputManufaktur" class="sr-only">Manufaktur</label>
                        <input type="manufaktur" id="inputManufaktur" class="form-control mb-3" placeholder="Manufaktur" required>
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