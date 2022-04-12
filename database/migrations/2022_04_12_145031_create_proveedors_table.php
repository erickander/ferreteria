<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id('dor_id');
            $table->string('dor_nombre');
            $table->string('dor_apellido');
            $table->string('dor_ruc')->unique();
            $table->string('dor_cedula')->unique();
            $table->string('dor_direccion');
            $table->string('dor_telefono');
            $table->date('dor_fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
}
