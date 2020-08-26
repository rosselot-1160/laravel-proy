<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->words(3,true),
        // 'nombre' => substr($faker->sentence(3,0,-1),
        'descripcion' => $faker->sentence(10),
        'descripcion_completo' => $faker->text,
        'precio' => $faker->randomFloat(2, 5, 1500),

        'category_id' => $faker->numberBetween(1,5)
    ];
});
