<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,3)),
            'description'  => $this->faker->paragraph(mt_rand(40,50)),
            'user_id'  => $this->faker->numberBetween(1,10),
            'amount'  => $this->faker->numberBetween($min = 10000, $max = 9999999),
            'duration'  => $this->faker->numberBetween(30,120)
        ];
    }
}