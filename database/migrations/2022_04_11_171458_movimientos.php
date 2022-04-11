<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Movimientos', function (Blueprint $table) {
            $table->id('mov_id');
            $table->string('mov_tipo');
            $table->string('mov_detalle');
            $table->date('mov_fecha');
            $table->float('mov_precio');
            $table->foreignId('usu_id')->references('usu_id')->on('User');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Movimientos');
    }
}
