<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_unidades;
use Faker\Generator as Faker;

$factory->define(tbl_unidades::class, function (Faker $faker) {

    return [
        'unidad' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
