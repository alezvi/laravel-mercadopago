<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'currency_id' => 'ARS',
        'picture_url' => $faker->imageUrl(),
        'description' => $faker->paragraph,
        'category_id' => null,
        'quantity' => $faker->numberBetween(0, 1000),
        'unit_price' => $faker->randomFloat(2, 99, 9999),
    ];
});
