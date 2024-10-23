<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Todo;
use App\Models\Comment;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //TodoApp::factory(10)->create();
        Todo::factory(10)
        ->has(Comment::factory()->count(3))
        ->create();
    }
}
