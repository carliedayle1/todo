<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    public function run()
    {
        // Create 10 sample todos
        Todo::factory()->count(10)->create();
    }
}
