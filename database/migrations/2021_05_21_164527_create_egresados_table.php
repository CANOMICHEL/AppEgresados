<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateEgresadosTable extends Migration
{
    /**
     * Tabla para almacenar los datos generales de un egresado
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('dni','8')->unique();
            $table->string('nombres',50);
            $table->string('ap_paterno',50);
            $table->string('ap_materno',50);
            $table->enum('sexo',['Masculino','Femenino']);
            $table->string('res_graduacion',15)->unique();
            $table->string('res_titulacion',15)->unique();
            $table->date('fecha_res_graduacion');
            $table->date('fecha_res_titulacion');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresados');
    }
}
