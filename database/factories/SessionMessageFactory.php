<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Session;

class SessionMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            "content" => $this->faker->realText(100),
            "type" => "text",
            "visibility" => true,
            "user_id" => User::getRandomId(),
            "session_id" => Session::getRandomId(),
        ];
    }
}
