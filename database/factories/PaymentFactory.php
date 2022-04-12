<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "channel" => "tigopesa",
            "type" => "mobile",
            "callback_string" => $this->faker->sentence(),
            "orderId" => Order::getRandomId(),
        ];
    }
}
