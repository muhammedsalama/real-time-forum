<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {

    $title = $faker->sentence;
    return [
    'category_id'=> function(){
        return \App\Category::all()->random();
    },
    'user_id'=>function(){
        return \App\User::all()->random();
    },
    'title'=>$title,
    'slug'=>str_slug($title),
    'body'=>$faker->text
    ];
});
