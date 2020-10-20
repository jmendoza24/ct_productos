<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_entidad;
use Faker\Generator as Faker;

$factory->define(tbl_entidad::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'rfc' => $faker->word,
        'telefono' => $faker->word,
        'director' => $faker->word,
        'correo' => $faker->word,
        'telefono2' => $faker->word,
        'direccion' => $faker->word,
        'logo' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
