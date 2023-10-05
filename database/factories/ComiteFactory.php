<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comite;
use App\Models\Eleccion;
use Faker\Generator as Faker;

$factory->define(Comite::class, function (Faker $faker) {
    return [
        'id_eleccion' => Eleccion::inRandomOrder()->first()->id,
        'tipoComite' => $faker->word,
    ];
});
