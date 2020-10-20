<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_empresa;
use Faker\Generator as Faker;

$factory->define(tbl_empresa::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'direccion' => $faker->word,
        'telefono' => $faker->word,
        'nombre_contacto' => $faker->word,
        'correo' => $faker->word,
        'celular' => $faker->word,
        'face' => $faker->word,
        'insta' => $faker->word,
        'web' => $faker->word,
        'logo' => $faker->word,
        'condiciones' => $faker->text,
        'tipo_cambio' => $faker->word,
        'rfc' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
