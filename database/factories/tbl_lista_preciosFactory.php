<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_lista_precios;
use Faker\Generator as Faker;

$factory->define(tbl_lista_precios::class, function (Faker $faker) {

    return [
        'id_producto' => $faker->randomDigitNotNull,
        'lista1' => $faker->word,
        'lista2' => $faker->word,
        'lista3' => $faker->word,
        'lista5' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
