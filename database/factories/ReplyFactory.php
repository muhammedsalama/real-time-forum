<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'question_id'=>function(){
            return \App\Question::all()->random();
        },
        'user_id'=>function(){
        return \App\User::all()->random();
        },
        'body'=>$faker->text
    ];
});
