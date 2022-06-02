<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Factura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factura', function (Blueprint $table) {
            $table->id('fac_id');
            $table->foreignId('cli_id')->references('cli_id')->on('clientes');
            $table->string('fac_numero_de_factura');
            $table->date('fac_fecha');
            $table->float('fac_total');
            $table->float('fac_iva');
            $table->float('fac_descuento');
            $table->integer('fac_estado')->default(1);
            $table->string('fac_observaciones')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Factura');
    }
}
