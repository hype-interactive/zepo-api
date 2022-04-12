<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Group;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "content" => $this->faker->sentence(15),
            "image" => $this->faker->imageUrl(),
            "group_id" => Group::inRandomOrder()->first(),
        ];
    }
}
