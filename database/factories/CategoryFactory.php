<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Category;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'nombre' => ucfirst($faker->word),
        'descripcion' => $faker->sentence(10),
    ];
});
