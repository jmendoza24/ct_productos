<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_entregas;
use Faker\Generator as Faker;

$factory->define(tbl_entregas::class, function (Faker $faker) {

    return [
        'id_cliente' => $faker->randomDigitNotNull,
        'direccion' => $faker->word,
        'colonia' => $faker->word,
        'cp' => $faker->word,
        'id_estado' => $faker->randomDigitNotNull,
        'id_municipio' => $faker->randomDigitNotNull,
        'id_pais' => $faker->randomDigitNotNull,
        'comentarios' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
