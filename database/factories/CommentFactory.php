<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'todo_id' => Todo::factory(),
            'body' => $this->faker->paragraph(),
        ];
    }
}
