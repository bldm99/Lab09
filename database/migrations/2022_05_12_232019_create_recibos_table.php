<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cod_rec');
            $table->integer('subtotal');
            $table->integer('igv');
            $table->integer('total');
            $table->string('estado');
            $table->DATE('fecha_vnc');

            $table->integer('id_cs')->unsigned();
            $table->foreign('id_cs')->references('id_cs')->on('socios');
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
        Schema::dropIfExists('recibos');
    }
}
