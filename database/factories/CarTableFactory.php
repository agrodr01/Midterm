<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford', 'toyota','honda']),
        'model' => $faker->randomElement(['5.0L', '2.6L','3.2L']),
        'year' => $faker->year,
        'remember_token' => str_random(10),
    ];
});
