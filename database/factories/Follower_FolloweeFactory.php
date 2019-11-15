<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Follower_Followee;
use Faker\Generator as Faker;

$factory->define(Follower_Followee::class, function (Faker $faker) {

    return [
        'user_id_follower'=>User::all()->random()->id,
        'user_id_followee'=>User::all()->random()->id


    ];
});
