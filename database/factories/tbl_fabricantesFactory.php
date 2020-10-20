<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_fabricantes;
use Faker\Generator as Faker;

$factory->define(tbl_fabricantes::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'razon' => $faker->word,
        'rfc' => $faker->word,
        'web' => $faker->word,
        'tel1' => $faker->word,
        'tel2' => $faker->word,
        'direccion' => $faker->word,
        'colonia' => $faker->word,
        'cp' => $faker->word,
        'estado' => $faker->word,
        'municipio' => $faker->word,
        'pais' => $faker->randomDigitNotNull,
        'condiciones' => $faker->text,
        'comentarios' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
