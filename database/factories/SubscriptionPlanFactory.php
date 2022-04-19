<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->getRandomTitle(),
            "description" => $this->faker->sentences(4, true),
            "amount" => $this->getRandomAmount(),
            "slots" => mt_rand(1, 9),
            "mode" => "session",
            "days" => mt_rand(1, 30),
        ];
    }

    public function getRandomTitle()
    {
        $titles = ["Premium", "Gold", "Diamond", "Bronze", "Free"];

        return $titles[mt_rand(0, 4)];
    }

    public function getRandomAmount()
    {
        $titles = ["1000", "2000", "10000", "50000", "100000"];

        return $titles[mt_rand(0, 4)];
    }
}
