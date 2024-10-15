<?php

namespace Database\Seeders;


 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use App\Models\TodoApp;
use App\Models\Todo;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Todo::factory(10)->create();


        Todo::factory()->create([
            'title' => fake()->title(),
            'description' => fake()->paragraph(),
        ]);
    }
}
