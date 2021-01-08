<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokPasokanManufaktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_pasokan_manufakturs', function (Blueprint $table) {
            $table->id('id_pasokan', 10);
            $table->unsignedBigInteger('id_manufaktur');
            $table->string('pasokan');
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
        Schema::dropIfExists('stok_pasokan_manufakturs');
    }
}
