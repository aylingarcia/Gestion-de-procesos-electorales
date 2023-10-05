<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Datos de ejemplo para personas
        $personas = [
            [
                'id_eleccion' => 1, // ID de la elección a la que pertenece esta persona
                'id_comite' => 1,   // ID del comité al que pertenece esta persona
                'nombres' => 'Juan',
                'apellidoPaterno' => 'Pérez',
                'apellidoMaterno' => 'Gómez',
                'numeroCelular' => 123456789,
                'codSis' => 12345,
                'carnetIdentidad' => '123ABC',
                'fechaNacimiento' => '1990-05-15',
                'tipo' => 'Estudiante',
                'carrera' => 'Ingeniería Informática',
                'facultad' => 'Ingeniería',
                'profesion' => 'Ingeniero de Software',
                'cargo' => 'Presidente del Comité',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_eleccion' => 1, // ID de la elección a la que pertenece esta persona
                'id_comite' => 1,   // ID del comité al que pertenece esta persona
                'nombres' => 'Juan',
                'apellidoPaterno' => 'Pérez',
                'apellidoMaterno' => 'Gómez',
                'numeroCelular' => 123456789,
                'codSis' => 12345,
                'carnetIdentidad' => '123ABC',
                'fechaNacimiento' => '1990-05-15',
                'tipo' => 'Estudiante',
                'carrera' => 'Ingeniería Informática',
                'facultad' => 'Ingeniería',
                'profesion' => 'Ingeniero de Software',
                'cargo' => 'Presidente del Comité',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_eleccion' => 2, // ID de la elección a la que pertenece esta persona
                'id_comite' => 2,   // ID del comité al que pertenece esta persona
                'nombres' => 'Juan',
                'apellidoPaterno' => 'Pérez',
                'apellidoMaterno' => 'Gómez',
                'numeroCelular' => 123456789,
                'codSis' => 12345,
                'carnetIdentidad' => '123ABC',
                'fechaNacimiento' => '1990-05-15',
                'tipo' => 'Estudiante',
                'carrera' => 'Ingeniería Informática',
                'facultad' => 'Ingeniería',
                'profesion' => 'Ingeniero de Software',
                'cargo' => 'Presidente del Comité',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_eleccion' => 3, // ID de la elección a la que pertenece esta persona
                'id_comite' => 3,   // ID del comité al que pertenece esta persona
                'nombres' => 'Juan',
                'apellidoPaterno' => 'Pérez',
                'apellidoMaterno' => 'Gómez',
                'numeroCelular' => 123456789,
                'codSis' => 12345,
                'carnetIdentidad' => '123ABC',
                'fechaNacimiento' => '1990-05-15',
                'tipo' => 'Estudiante',
                'carrera' => 'Ingeniería Informática',
                'facultad' => 'Ingeniería',
                'profesion' => 'Ingeniero de Software',
                'cargo' => 'Presidente del Comité',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más datos de ejemplo si es necesario
        ];

        // Insertar datos en la tabla personas
        DB::table('personas')->insert($personas);
    }
}
