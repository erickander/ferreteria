<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventario', function (Blueprint $table) {
            $table->id('inv_id');
            $table->string('inv_nombre');
            $table->string('inv_fecha');
            $table->string('inv_cantidad');
            $table->foreignId('pro_id')->references('pro_id')->on('Productos');
            $table->foreignId('dor_id')->references('dor_id')->on('Proveedor');
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
        Schema::dropIfExists('Inventario');
    }
}
