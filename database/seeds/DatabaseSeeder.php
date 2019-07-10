<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class,10)->create();
        factory(\App\Category::class,5)->create();
        factory(\App\Question::class,10)->create();
        factory(\App\Reply::class,20)->create()->each(function ($reply){
            return $reply->likes()->save(factory(\App\Like::class)->make());
        });



    }
}
