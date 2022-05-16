<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_cs');
            $table->string('nombre');
            $table->string('apellidos');
            $table->integer('edad');
            $table->string('manzana');
            $table->string('sexo');
            $table->string('dni');
            $table->DATE('fecha_nac');

            $table->integer('id_cp')->unsigned();
            $table->foreign('id_cp')->references('id_cp')->on('centro_poblado');
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
        Schema::dropIfExists('socios');
    }
}
