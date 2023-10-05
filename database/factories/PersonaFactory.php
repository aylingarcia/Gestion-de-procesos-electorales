<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Persona;
use App\Models\Eleccion;
use App\Models\Comite;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'id_eleccion' => Eleccion::inRandomOrder()->first()->id,
        'id_comite' => Comite::inRandomOrder()->first()->id,
        'nombres' => $faker->firstName,
        'apellidoPaterno' => $faker->lastName,
        'apellidoMaterno' => $faker->lastName,
        'numeroCelular' => $faker->numberBetween(0,99999999),
        'codSis' => $faker->numberBetween(0,203301859),
        'carnetIdentidad' => $faker->numberBetween(0,99999999),
        'fechaNacimiento' => $faker->date,
        'tipo' => $faker->word,
        'carrera' => $faker->sentence,
        'facultad' => $faker->sentence,
    ];
});
