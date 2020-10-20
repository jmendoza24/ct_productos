<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_titulos_lista;
use Faker\Generator as Faker;

$factory->define(tbl_titulos_lista::class, function (Faker $faker) {

    return [
        'titulo1' => $faker->word,
        'titulo2' => $faker->word,
        'titulo3' => $faker->word,
        'titulo4' => $faker->word,
        'titulo5' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
