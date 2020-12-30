<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Db\People;
use Faker\Generator as Faker;

$factory->define(People::class, function (Faker $faker) {
    return [
        'first_name' => $fake->sentence
    ];
});
