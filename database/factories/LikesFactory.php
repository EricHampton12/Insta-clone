<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\User;
use App\Posts;
use App\Likes;

$factory->define(Likes::class, function (Faker $faker) {
    $users = User::all()->pluck('id')->toArray();

    return [
        'user_id' => $faker->randomElement($users),
        'post_id' => function(){
            return factory(Posts::class)->create()->id;
        }

    ];
});
