<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hobby;
use Faker\Generator as Faker;

$factory->define(Hobby::class, function (Faker $faker) {
    return [
        'Hobby' => $faker->realText('30'),
        'Description' => $faker->realText(),
    ];
});
