<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;

class PostCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "content" => $this->faker->realText(),
            "visibility" => $this->faker->boolean(),
            "user_id" => User::getRandomId(),
            "post_id" => Post::getRandomId(),
        ];
    }
}
