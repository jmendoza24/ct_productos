<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_ubicaciones;
use Faker\Generator as Faker;

$factory->define(tbl_ubicaciones::class, function (Faker $faker) {

    return [
        'id_direccion' => $faker->randomDigitNotNull,
        'ubicacion' => $faker->word,
        'id_estado' => $faker->randomDigitNotNull,
        'id_municipio' => $faker->randomDigitNotNull,
        'comentarios' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
