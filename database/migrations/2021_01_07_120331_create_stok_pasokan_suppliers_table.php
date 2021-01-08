<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokPasokanSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_pasokan_suppliers', function (Blueprint $table) {
            $table->id('id_pasokan', 10);
            $table->unsignedBigInteger('id_supplier');
            $table->string('pasokan');
            $table->integer('jumlah');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_pasokan_suppliers');
    }
}
