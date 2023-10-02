<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Eleccion;
use Faker\Generator as Faker;

$factory->define(App\Eleccion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence,
        'motivo' => $faker->text,
        'cargodeautoridad' => $faker->word,
        'gestion' => $faker->year,
        'tipodevotantes' => $faker->word,
        'convocatoria' => $faker->imageUrl(),
        'fecha' => $faker->date,
        'tipodeeleccion' => $faker->word,
        'descripcion' => $faker->paragraph,
    ];
});

