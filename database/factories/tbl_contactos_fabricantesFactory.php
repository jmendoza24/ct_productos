<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_contactos_fabricantes;
use Faker\Generator as Faker;

$factory->define(tbl_contactos_fabricantes::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'correo' => $faker->word,
        'puesto' => $faker->word,
        'telefono' => $faker->word,
        'comentarios' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
