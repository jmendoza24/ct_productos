<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_inventario;
use Faker\Generator as Faker;

$factory->define(tbl_inventario::class, function (Faker $faker) {

    return [
        'id_producto' => $faker->randomDigitNotNull,
        'cantidad' => $faker->word,
        'costo' => $faker->word,
        'fecha_ingreso' => $faker->word,
        'comentarios' => $faker->text,
        'id_usuario' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
