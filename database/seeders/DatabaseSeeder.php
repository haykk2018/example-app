<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
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
        \App\Models\User::factory(20)->create();
        \App\Models\Post::factory(60)->create();

//        factory(\App\Models\User::class,4)->create();
//        factory(\App\Models\Post::class,15)->create();
//        User::factory()->has(Post::factory()->count(3))->create();
    }
}
