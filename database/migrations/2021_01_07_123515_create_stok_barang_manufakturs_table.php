<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBarangManufaktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_barang_manufakturs', function (Blueprint $table) {
            $table->id('id_barang', 10);
            $table->unsignedBigInteger('id_manufaktur');
            $table->string('barang');
            $table->integer('jumlah');
            $table->foreign('id_manufaktur')->references('id_manufaktur')->on('manufakturs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_barang_manufakturs');
    }
}
