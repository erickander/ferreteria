<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_name');
            $table->string('usu_email')->unique();
            $table->string('usu_cedula')->unique();
            $table->string('usu_ruc')->unique();
            $table->string('usu_direccion');
            $table->string('usu_telefono');
            $table->string('password');
            $table->string('usu_tipo');
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('per_id')->references('per_id')->on('Permisos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('User');
    }
}
