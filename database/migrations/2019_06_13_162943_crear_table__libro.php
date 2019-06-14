<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTableLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Libro', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string("Titulo",100);
            $table->string("stbn",50);
            $table->string("Autor",100);
            $table->unsignedTinyInteger("Cantidad");
            $table->string("Editorial",50)->nullable();
            $table->string("Foto",100)->nullable();
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
        Schema::dropIfExists('Libro');
    }
}
