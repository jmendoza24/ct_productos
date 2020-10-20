<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\tbl_vendedores;
use Faker\Generator as Faker;

$factory->define(tbl_vendedores::class, function (Faker $faker) {

    return [
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'telefono' => $faker->phoneNumber,
        'id_tipo_precio' => $faker->randomDigitNotNull,
        'descuentos' => $faker->numberBetween(1,100),
        'comentarios' => $faker->paragraph,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
    ];
});



// $faker->randomDigit;   php artisan db:seed
// $faker->numberBetween(1,100);
// $faker->word;
// $faker->paragraph;
// $faker->lastName;
// $faker->city;
// $faker->year;
// $faker->domainName;
// $faker->creditCardNumber;
