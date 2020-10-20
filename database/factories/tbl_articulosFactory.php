<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_articulos;
use Faker\Generator as Faker;

$factory->define(tbl_articulos::class, function (Faker $faker) {

    return [
        'id_modulo' => $faker->randomDigitNotNull,
        'articulo' => $faker->word,
        'contenido' => $faker->text,
        'fragmento' => $faker->word,
        'monto' => $faker->word,
        'id_moneda' => $faker->randomDigitNotNull,
        'activo' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
