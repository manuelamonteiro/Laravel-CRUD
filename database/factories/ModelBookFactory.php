<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class ModelBookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'pages' => fake()->randomNumber(),
            'price' => fake()->randomNumber(),
            'id_user' => User::factory(),
        ];
    }
}
