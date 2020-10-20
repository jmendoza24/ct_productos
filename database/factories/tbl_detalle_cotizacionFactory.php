<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_detalle_cotizacion;
use Faker\Generator as Faker;

$factory->define(tbl_detalle_cotizacion::class, function (Faker $faker) {

    return [
        'id_cotizacion' => $faker->randomDigitNotNull,
        'id_producto' => $faker->randomDigitNotNull,
        'id_lista' => $faker->randomDigitNotNull,
        'costo' => $faker->word,
        'descuento' => $faker->word,
        'cantidad' => $faker->word,
        'comentarios_adicionales' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
