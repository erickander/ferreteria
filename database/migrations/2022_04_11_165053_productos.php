<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('Productos', function (Blueprint $table) {
            $table->id('pro_id');
            $table->string('pro_nombre');
            $table->string('pro_calidad');
            $table->string('pro_tamaño');
            $table->integer('pro_estado');
            $table->string('pro_descripcion');
            $table->float('pro_precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
    }
}
