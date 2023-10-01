<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elecciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('motivo');
            $table->string('cargodeautoridad');
            $table->string('gestion');
            $table->string('tipodevotantes');
            $table->binary('convocatoria')->nullable();
            $table->date('fecha');
            $table->string('tipodeeleccion');
            $table->text('descripcion');
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
        Schema::dropIfExists('elecciones');
    }
}
