<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(1),//一桁の数字
        'title' => $faker->word(),
        'body' => $faker->realText(200),//512文字の文章
        'review' => $faker->numberBetween(0.0,5.0),
        'chest' => $faker->numberBetween(0.0,5.0),
        'arm' => $faker->numberBetween(0.0,5.0),
        'shoulder' => $faker->numberBetween(0.0,5.0),
        'belly' => $faker->numberBetween(0.0,5.0),
        'back' => $faker->numberBetween(0.0,5.0),
        'leg' => $faker->numberBetween(0.0,5.0),
    ];
});