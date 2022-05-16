<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_Tr');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('cargo');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('dni');
            $table->DATE('fecha_nac');

            $table->integer('id_As')->unsigned();
            $table->foreign('id_As')->references('id_As')->on('asociacion');
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
        Schema::dropIfExists('trabajadores');
    }
}
