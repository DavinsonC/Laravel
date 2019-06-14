<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LibroPrestamo', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('Usuario_id');
            $table->foreign('Usuario_id','fk_Usuario_libroprestamo')->references('id')->on('Usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('Libro_Id');
            $table->foreign('Libro_Id','fk_Libro_libroprestamo')->references('id')->on('Libro')->onDelete('restrict')->onUpdate('restrict');
            $table->date("Fecha_Prestamo");
            $table->string("Prestado_A",100);
            $table->boolean("Estado");
            $table->date("Fecha_Devuelto")->nullable();
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
        Schema::dropIfExists('LibroPrestamo');
    }
}
