<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_clientes;
use Faker\Generator as Faker;

$factory->define(tbl_clientes::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'nombre_corto' => $faker->word,
        'direccion' => $faker->word,
        'colonia' => $faker->word,
        'id_municipio' => $faker->randomDigitNotNull,
        'id_estado' => $faker->randomDigitNotNull,
        'id_pais' => $faker->randomDigitNotNull,
        'rfc' => $faker->word,
        'estatus' => $faker->randomDigitNotNull,
        'activo' => $faker->randomDigitNotNull,
        'comentarios' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
