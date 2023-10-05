<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Datos de ejemplo para comites
        $comites = [
            [
                'id_eleccion' => 1, // ID de la elección a la que pertenece este comité
                'tipoComite' => 'Comité Organizador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_eleccion' => 2, // ID de la elección a la que pertenece este comité
                'tipoComite' => 'Comité de Seguimiento',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_eleccion' => 3, // ID de la elección a la que pertenece este comité
                'tipoComite' => 'Comité de Algo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más datos de ejemplo si es necesario
        ];

        // Insertar datos en la tabla comites
        DB::table('comites')->insert($comites);
    }
}
