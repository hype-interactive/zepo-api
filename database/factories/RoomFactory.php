<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => "room ".mt_rand(1,10),
            "icon" => $this->faker->imageUrl(50,50,"icons"),
            "description" => $this->faker->realText(),
        ];
    }
}
