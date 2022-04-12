<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cli_id');
            $table->string('cli_nombre');
            $table->string('cli_apellido');
            $table->string('cli_cedula')->unique();
            $table->string('cli_email')->unique();
            $table->string('cli_direccion');
            $table->string('cli_telefono');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('per_id')->references('per_id')->on('permisos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
