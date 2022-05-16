<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('nro_mtn');
            $table->string('descripcion');
            $table->integer('costo');
            $table->DATE('fecha');

            $table->integer('lugar')->unsigned();
            $table->integer('autoritario')->unsigned();
            $table->foreign('lugar')->references('id_cp')->on('centro_poblado');
            $table->foreign('autoritario')->references('id_Tr')->on('trabajadores');
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
        Schema::dropIfExists('mantenimientos');
    }
}
