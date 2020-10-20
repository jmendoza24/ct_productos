<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_categorias;
use Faker\Generator as Faker;

$factory->define(tbl_categorias::class, function (Faker $faker) {

    return [
        'categoria' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
