@extends('layouts.main ')

@section('title', 'Stok Pasokan')

@section('main')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h4">Stok Pasokan</h1>
        </div>
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
    </div>
</main>
@endsection