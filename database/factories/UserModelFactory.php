<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'username' => fake()->userName(),
            'password' => bcrypt('password'), // default
            'level_id' => 1,
        ];
    }
}
