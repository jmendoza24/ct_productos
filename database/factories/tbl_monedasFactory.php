<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_monedas;
use Faker\Generator as Faker;

$factory->define(tbl_monedas::class, function (Faker $faker) {

    return [
        'moneda' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
