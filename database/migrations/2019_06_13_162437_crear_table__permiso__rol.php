<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablePermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PermisoRol', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('rol_id');
            $table->foreign('rol_id','fk_PermisoRol_Rol')->references('id')->on('Rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('Permiso_Id');
            $table->foreign('Permiso_Id','fk_PermisoRol_Usuario')->references('id')->on('Permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('PermisoRol');
    }
}
