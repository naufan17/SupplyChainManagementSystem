<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\Manufaktur;
use App\Models\StokPasokanSupplier;
use App\Models\StokPasokanManufaktur;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        $manufakturs = Manufaktur::all();
        $stokPasokans = StokPasokanSupplier::all();
        $stokPasokanManufakturs = StokPasokanSupplier::all();
        return view('supplier', compact('suppliers', 'manufakturs', 'stokPasokans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSupplier()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSupplier(Request $request)
    {
        Supplier::create([
            'supplier' => $request->supplier
        ]);
        return redirect('supplier');
    }

    public function storePasokan(Request $request)
    {
        StokPasokanSupplier::create([
            'id_supplier' => $request->IDsupplier,
            'pasokan' => $request->pasokan,
            'jumlah' => $request->jumlah
        ]);
        return redirect('supplier');
    }

    public function sendPasokan(Request $request)
    {
        StokPasokanManufaktur::create([
            'id_manufaktur' => $request->IDmanufaktur,
            'pasokan' => $request->pasokan,
            'jumlah' => $request->jumlah
        ]);
        return redirect('supplier');
    }

    // public function deleteSupplier($id)
    // {
    //     Supplier::where('id_supplier', $id)->delete();
    //     return redirect('supplier');
    // }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePasokan(Request $request, StokPasokanSupplier $stokPasokanSupplier)
    {
        StokPasokanSupplier::where('id_pasokan', $stokPasokanSupplier->id)
        ->update([
            'id_supplier' => $request->IDsupplier,
            'pasokan' => $request->pasokan,
            'jumlah' => $request->jumlah
        ]);
    }

    public function deletePasokan($id)
    {
        StokPasokanSupplier::where('id_pasokan', $id)->delete();
        return redirect('supplier');
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
