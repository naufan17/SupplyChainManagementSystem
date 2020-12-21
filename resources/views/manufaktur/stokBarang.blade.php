@extends('layouts.main ')

@section('title', 'Stok Barang')

@section('main')

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
                        <th>Manufaktur</th>
                        <th>Kode Barang</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>(Nama Manufaktur)</td>
                        <td>116</td>
                        <td>Sepatu</td>
                        <td>5</td>
                    </tr>
                        <tr>
                        <td>2</td>
                        <td>(Nama Manufaktur)</td>
                        <td>117</td>
                        <td>Tas</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>(Nama Manufaktur)</td>
                        <td>118</td>
                        <td>Baju</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>(Nama Manufaktur)</td>
                        <td>119</td>
                        <td>Kaos Kaki</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>(Nama Manufaktur)</td>
                        <td>120</td>
                        <td>Celana</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection