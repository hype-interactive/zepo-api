<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Room;

class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(4),
            "status" => $this->faker->boolean(),
            "client" => User::getRandomId(),
            "consultant" => User:: getRandomId(),
            "room_id" => Room::getRandomId(),
        ];
    }
}