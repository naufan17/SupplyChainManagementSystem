<?php

namespace App\Http\Controllers;

use App\Models\Retail;
use App\Models\PermintaanPesanan;
use Illuminate\Http\Request;

class RetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retails = Retail::all();
        $permintaanPesanans = PermintaanPesanan::all();
        return view('retail', compact('retails', 'permintaanPesanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRetail(Request $request)
    {
        Retail::create(['retail' => $request->retail]);
        return redirect('retail');
    }

    public function sendPesanan(Request $request)
    {
        PermintaanPesanan::create([
            'id_retail' => $request->IDretail,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
            'status' => 0,
        ]);
        return redirect('retail');
    }

    public function deletePesanan($id)
    {
        PermintaanPesanan::where('id_pesanan', $id)->delete();
        return redirect('retail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
