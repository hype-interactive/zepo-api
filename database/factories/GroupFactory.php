<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word(),
            "status" => $this->faker->boolean(),
            "description" => $this->faker->sentence(),
            "admin" => User::getRandomId(),
        ];
    }
}
