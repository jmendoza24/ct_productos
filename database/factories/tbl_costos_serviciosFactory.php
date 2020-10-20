<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_costos_servicios;
use Faker\Generator as Faker;

$factory->define(tbl_costos_servicios::class, function (Faker $faker) {

    return [
        'id_direccion' => $faker->randomDigitNotNull,
        'id_servicio' => $faker->randomDigitNotNull,
        'articulo' => $faker->word,
        'fraccion' => $faker->word,
        'monto' => $faker->word,
        'moneda' => $faker->word,
        'comentarios' => $faker->text,
        'periodicidad' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
