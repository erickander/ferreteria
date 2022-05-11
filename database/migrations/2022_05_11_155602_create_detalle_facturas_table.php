<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id('det_id');
            $table->foreignId('pro_id')->references('pro_id')->on('productos');
            $table->foreignId('fac_id')->references('fac_id')->on('Factura');
            $table->integer('dat_cantidad');
            $table->float('dat_VU');
            $table->float('dat_VT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_facturas');
    }
}
