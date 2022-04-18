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
            "userId" => User::getRandomId(),
            "subscriptionPlanId" => SubscriptionPlan::inRandomOrder()->first(),
            "paymentId" => Payment::inRandomOrder()->first(),
        ];
    }
}
