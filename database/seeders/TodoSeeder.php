<?php

namespace Database\Seeders;

use App\Models\todos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        todos::factory()->count(10)->create();
    }
}
