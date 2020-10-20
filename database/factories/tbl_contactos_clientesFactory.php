<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_contactos_clientes;
use Faker\Generator as Faker;

$factory->define(tbl_contactos_clientes::class, function (Faker $faker) {

    return [
        'id_cliente' => $faker->randomDigitNotNull,
        'nombre' => $faker->word,
        'puesto' => $faker->word,
        'telefono' => $faker->word,
        'correo' => $faker->text,
        'comentarios' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
