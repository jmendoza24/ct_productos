<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_subservicios;
use Faker\Generator as Faker;

$factory->define(tbl_subservicios::class, function (Faker $faker) {

    return [
        'id_servicio' => $faker->randomDigitNotNull,
        'subservicio' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
