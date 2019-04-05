<?php

use App\Car;
use Illuminate\Support\Str;
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

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => Car::brand[rand(0, count(Car::brand)-1)],
        'model' => Car::model[rand(0, count(Car::model)-1)],
        'year' => rand(1990, 2016),
        'maxSpeed' => rand(150, 250),
        'isAutomatic' => rand(0, 1),
        'engine' => Car::engine[rand(0, count(Car::engine)-1)],
        'numberOfDoors' => rand(2, 5),
    ];
});
