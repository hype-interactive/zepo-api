<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\SubscriptionPlan;
use App\Models\Payment;

class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "expiry_time" => $this->faker->dateTime(),
            "user_id" => User::getRandomId(),
            "subscription_plan_id" => SubscriptionPlan::inRandomOrder()->first(),
            "payment_id" => Payment::inRandomOrder()->first(),
        ];
    }
}
