<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "fname" => $this->faker->firstName(),
            "lname" => $this->faker->lastName(),
            "phone"=>  $this->faker->phoneNumber(),
            "email" => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            "password" => Hash::make('password'),
            'remember_token' => Str::random(10),           
            "role_id" => $this->getRandomRoleID(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    private function getRandomRoleID() {
        
        $role = Role::inRandomOrder()->first();
        return $role->id;
    }

}
