<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Article;

class ArticleCommentFactory extends Factory
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
            "visibility" => true,
            "user_id" => User::getRandomId(),
            "article_id" => Article::inRandomOrder()->first()
        ];
    }
}
