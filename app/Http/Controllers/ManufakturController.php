<?php

namespace App\Http\Controllers;

use App\Models\Manufaktur;
use App\Models\StokPasokanManufaktur;
use App\Models\StokBarangManufaktur;
use Illuminate\Http\Request;

class ManufakturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufakturs = Manufaktur::all();
        $stokPasokans = StokPasokanManufaktur::all();
        $stokBarangs = StokBarangManufaktur::all();
        return view('manufaktur', compact('manufakturs', 'stokPasokans', 'stokBarangs'));
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
    public function storeManufaktur(Request $request)
    {
        Manufaktur::create(['manufaktur' => $request->manufaktur]);
        return redirect('manufaktur');
    }

    public function storeBarang(Request $request)
    {
        StokBarangManufaktur::create([
            'id_manufaktur' => $request->IDmanufaktur,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah
        ]);
        return redirect('manufaktur');
    }

    // public function deleteManufaktur($id)
    // {
    //     Manufaktur::where('id_manufaktur', $id)->delete();
    //     return redirect('manufaktur');
    // }


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
