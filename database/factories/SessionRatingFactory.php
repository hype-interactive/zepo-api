<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Session;

class SessionRatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "value" => $this->faker->numberBetween(0, 10),
            "sessionId" => Session::getRandomId(),

        ];
    }
}
