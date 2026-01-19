<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assassin>
 */
class AssassinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "codename" => fake()->word(),
            "description" => fake()->text(),
            "age" => fake()->numberBetween(1, 70),
            "skill" => fake()->randomElement(["low", "medium", "high"])
        ];
    }
}
