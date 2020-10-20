<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_cotizacion;
use Faker\Generator as Faker;

$factory->define(tbl_cotizacion::class, function (Faker $faker) {

    return [
        'interesado' => $faker->word,
        'direccion' => $faker->word,
        'colonia' => $faker->word,
        'cp' => $faker->word,
        'num_ext' => $faker->word,
        'num_int' => $faker->word,
        'local' => $faker->word,
        'comentarios' => $faker->text,
        'estatus' => $faker->randomDigitNotNull,
        'telefono' => $faker->word,
        'correo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
