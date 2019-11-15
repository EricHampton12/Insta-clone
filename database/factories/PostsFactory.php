<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Posts;
use Illuminate\Support\Str;


$factory->define(Posts::class, function (Faker $faker) {
    $users = User::all()->pluck('id')->toArray();
    return [
        'description' => $faker->text,
        'likes' => random_int(1, 8),
        'user_id' => $faker->randomElement($users),
        'image' => $faker->imageUrl($width = 640,$height = 480)


    ];
});
