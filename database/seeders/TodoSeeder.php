<?php

namespace Database\Seeders;

use App\Models\Todos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todos::factory()->count(10)->create();
    }
}
