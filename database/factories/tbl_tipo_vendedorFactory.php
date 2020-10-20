<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_tipo_vendedor;
use Faker\Generator as Faker;

$factory->define(tbl_tipo_vendedor::class, function (Faker $faker) {

    return [
        'tipo_vendedor' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
