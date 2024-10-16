<?php

namespace Database\Seeders;

use App\Models\Todo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Todo::factory()->create([
            'title' => fake()->title(),
            'description' => fake()->paragraph(),
        ]);
    }
}
