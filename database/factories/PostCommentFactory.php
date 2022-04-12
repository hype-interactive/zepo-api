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
            "userId" => User::getRandomId(),
            "postId" => Post::getRandomId(),
        ];
    }
}
