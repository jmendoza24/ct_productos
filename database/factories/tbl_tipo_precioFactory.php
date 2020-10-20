<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_tipo_precio;
use Faker\Generator as Faker;

$factory->define(tbl_tipo_precio::class, function (Faker $faker) {

    return [
        'id_producto' => $faker->randomDigitNotNull,
        'id_cliente' => $faker->randomDigitNotNull,
        'costo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
