<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_subcategorias;
use Faker\Generator as Faker;

$factory->define(tbl_subcategorias::class, function (Faker $faker) {

    return [
        'id_categoria' => $faker->randomDigitNotNull,
        'sub_categoria' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
