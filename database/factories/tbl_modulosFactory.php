<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_modulos;
use Faker\Generator as Faker;

$factory->define(tbl_modulos::class, function (Faker $faker) {

    return [
        'modulo' => $faker->word,
        'activo' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
