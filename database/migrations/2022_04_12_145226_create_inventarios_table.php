<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('inv_id');
            $table->string('inv_fecha');
            $table->string('inv_cantidad');
            $table->foreignId('pro_id')->references('pro_id')->on('productos');
            $table->foreignId('dor_id')->references('dor_id')->on('proveedor');
            $table->foreignId('usu_id')->references('usu_id')->on('users');
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
        Schema::dropIfExists('inventarios');
    }
}
