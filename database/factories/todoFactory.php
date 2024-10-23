<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todo>
 */
class todoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             //'name' => fake()->name(),
            //'email' => fake()->unique()->safeEmail(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'completed' => fake()->boolean(),
        ];
    }
}
