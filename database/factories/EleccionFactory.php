<?php

use App\Eleccion;
use Faker\Generator as Faker;

$factory->define(Eleccion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'motivo' => $faker->sentence,
        'cargodeautoridad' => $faker->word,
        'gestion' => $faker->year,
        'tipodevotantes' => $faker->word,
        'convocatoria' => $faker->text,
        'fecha' => $faker->date,
        'tipodeeleccion' => $faker->word,
        'descripcion' => $faker->paragraph,
        'estado' => $faker->boolean,
    ];
});
