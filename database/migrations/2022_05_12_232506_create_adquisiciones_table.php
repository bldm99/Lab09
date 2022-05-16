<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdquisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adquisiciones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('nro_adq');
            $table->string('descripcion');
            $table->integer('costo');
            $table->DATE('fecha');


            $table->integer('autoritario')->unsigned();
            $table->foreign('autoritario')->references('id_Tr')->on('trabajadores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adquisiciones');
    }
}
