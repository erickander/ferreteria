<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transacciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transacciones', function (Blueprint $table) {
            $table->id('tra_id');
            $table->date('tra_fecha');
            $table->float('tra_cantidad');
            $table->float('tra_subtotal');
            $table->float('tra_iva');
            $table->float('tra_total');
            $table->foreignId('usu_id')->references('usu_id')->on('User');
            $table->foreignId('pro_id')->references('pro_id')->on('Productos');
            $table->foreignId('cli_id')->references('cli_id')->on('Clientes');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Transacciones');
    }
}
