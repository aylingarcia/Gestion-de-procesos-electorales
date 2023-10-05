<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_eleccion')->nullable()->constrained('eleccions', 'id');
            $table->foreignId('id_comite')->nullable()->constrained('comites', 'id');
            $table->string('nombres');	
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->integer('numeroCelular')->nullable();
            $table->integer('codSis')->nullable();
            $table->string('carnetIdentidad')->nullable();
            $table->string('fechaNacimiento');
            $table->string('tipo');
            $table->string('carrera');
            $table->string('facultad');
            $table->string('profesion')->nullable();
            $table->string('cargo')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
