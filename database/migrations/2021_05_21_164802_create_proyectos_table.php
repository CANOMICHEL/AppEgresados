<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Tabla para almacenar datos de proyectos de investigacion y/o publicaciones
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_egresado');
            $table->string('tipo',50);
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('institucion',150);
            $table->date('fecha');
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
        Schema::dropIfExists('proyectos');
    }
}
