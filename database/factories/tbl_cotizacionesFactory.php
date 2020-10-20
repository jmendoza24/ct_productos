<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_cotizaciones;
use Faker\Generator as Faker;

$factory->define(tbl_cotizaciones::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'id_tipo_cliente' => $faker->randomDigitNotNull,
        'cliente' => $faker->word,
        'id_cliente' => $faker->randomDigitNotNull,
        'correo' => $faker->word,
        'comentarios' => $faker->text,
        'estatus' => $faker->randomDigitNotNull,
        'id_usuario' => $faker->randomDigitNotNull,
        'descuento' => $faker->word,
        'iva' => $faker->word,
        'telefono' => $faker->word,
        'contacto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
