<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(rand(10,40));
        return [
            'user_id' => rand(1,5),
            'title' => $title,
            'short_title' => Str::length($title) > 30 ? mb_substr($title,0,30).'...' : $title,
            'created_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),
            'updated_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),
            'descr' => $this->faker->realText(rand(10,100)),

        ];
    }
}
