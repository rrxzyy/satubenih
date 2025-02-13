<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 3)),
            'slug'  => $this->faker->slug(mt_rand(2, 3)),
            'category' => $this->faker->sentence(mt_rand(2, 3)),
            'user_id'  => $this->faker->numberBetween(1, 10),
            'excerpt' => $this->faker->paragraph(mt_rand(3, 4)),
            'body'  => $this->faker->paragraph(mt_rand(40, 50))
        ];
    }
}