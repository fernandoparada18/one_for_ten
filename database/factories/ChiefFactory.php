<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Chief;
use Faker\Generator as Faker;

$factory->define(Chief::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'id_card' => $faker->word,
        'address' => $faker->text,
        'phone' => $faker->word,
        'email' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
