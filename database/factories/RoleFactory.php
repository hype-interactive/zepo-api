<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->getRandomName()
        ];

    }

    public function getRandomName()
    {
        $names = ["root","supervisor","consultant","client"];

        return $names[mt_rand(0,3)];
    }
}
