<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_productos;
use Faker\Generator as Faker;

$factory->define(tbl_productos::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'id_producto' => $faker->word,
        'marca' => $faker->word,
        'modelo' => $faker->word,
        'sku' => $faker->word,
        'codigo_producto' => $faker->word,
        'descripcion' => $faker->text,
        'descripcion2' => $faker->text,
        'unidades_paquete' => $faker->word,
        'volumen' => $faker->word,
        'id_unidad' => $faker->randomDigitNotNull,
        'id_origen' => $faker->randomDigitNotNull,
        'id_moneda' => $faker->randomDigitNotNull,
        'precio' => $faker->word,
        'id_tipo_precio' => $faker->randomDigitNotNull,
        'tiempo_entrega' => $faker->word,
        'estatus' => $faker->randomDigitNotNull,
        'activo' => $faker->randomDigitNotNull,
        'foto1' => $faker->text,
        'foto2' => $faker->text,
        'foto3' => $faker->text,
        'foto4' => $faker->text,
        'foto5' => $faker->text,
        'id_clasificador' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
