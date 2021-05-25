<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapacitacionsTable extends Migration
{
    /**
     * Tabla para almacenar datos de estudios de actualización y/o continua 
     * capacitación profesional
     * @return void
     */
    public function up()
    {
        Schema::create('capacitacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_egresado'); 
            $table->string('tipo',50); //tipo de formación
            $table->string('nombre',100); //nombre de la actividad de formación
            $table->text('descripcion');
            $table->string('institucion',150);
            $table->string('documento');
            $table->timestamps();
            $table->foreign('id_egresado')->references('id')->on('egresados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitacions');
    }
}
