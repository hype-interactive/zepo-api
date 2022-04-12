<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "amount" => mt_rand(1000,100000),
            "status" => "completed",
            "user_id" => User::getRandomId(),

        ];
    }
}
