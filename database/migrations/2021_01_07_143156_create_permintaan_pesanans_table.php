<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanPesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_pesanans', function (Blueprint $table) {
            $table->id('id_pesanan', 10);
            $table->unsignedBigInteger('id_retail');
            $table->string('barang');
            $table->integer('jumlah');
            $table->string('alamat');
            $table->boolean('status');
            $table->foreign('id_retail')->references('id_retail')->on('retails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permintaan_pesanans');
    }
}
