<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id('tra_id');
            $table->date('tra_fecha');
            $table->float('tra_cantidad');
            $table->float('tra_subtotal');
            $table->float('tra_iva');
            $table->float('tra_total');
            $table->float('tra_descuento');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('pro_id')->references('pro_id')->on('productos');
            $table->foreignId('cli_id')->references('cli_id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
}
