<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Profile;
use Faker\Generator as Faker;


$factory->define(Profile::class, function (Faker $faker) {
    $users = User::all()->pluck('id')->toArray();

    return [
        'user_id' => $faker->randomElement($users),
        'profileimage' => $faker->imageUrl($width = 640, $height = 480),
        'username' => $faker->unique()->word,

        
    ];
});
