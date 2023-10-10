
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eleccions = [
            [
                'nombre' => 'Elección HCU',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Elección Otro',
                'motivo' => 'Elección del Presidente',
                'cargodeautoridad' => 'Presidente',
                'gestion' => '2023-2027',
                'tipodevotantes' => 'Ciudadanos',
                'convocatoria' => null, // Puedes agregar datos binarios aquí si es necesario
                'fecha' => '2023-11-15',
                'tipodeeleccion' => 'General',
                'descripcion' => 'Elección presidencial para el período 2023-2027.',
                'estado' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
        ];
        // Insertar datos en la tabla eleccions
        DB::table('eleccions')->insert($eleccions);
    }
}