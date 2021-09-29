<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'restaurant_id' => rand(1, 3),
        'menu_category_id' => rand(1, 10),
        'name' => $faker->name(),
        'description' => $faker->sentence(6),
        'price' => $faker->numberBetween($min = 10000, $max = 60000),
        'image' => 'https://picsum.photos/250?image=' . rand(25, 200),
        'is_recommendation' => $faker->boolean(25)
    ];
});