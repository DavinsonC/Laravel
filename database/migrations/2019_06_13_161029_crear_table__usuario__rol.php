<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsuarioRol', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_UsuarioRol_Rol')->references('id')->on('Rol');
            $table->unsignedInteger('Usuario_id');
            $table->foreign('Usuario_id','fk_UsuarioId_Usuario')->references('id')->on('Usuario');
            $table->boolean("Estado");
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
        Schema::dropIfExists('UsuarioRol');
    }
}
