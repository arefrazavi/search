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

$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => "{$faker->firstName} {$faker->lastName}"
    ];
});

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->realText(15)),
        'description' => $faker->realText(200),
        'year' => $faker->year,
        'author_id' => function () {
            // We take the first random author from the table
            return App\Author::inRandomOrder()->first()->id;
        }
    ];
});