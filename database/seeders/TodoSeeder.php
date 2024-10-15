<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    public function run()
{
    \App\Models\Todo::create([
        'title' => 'Buy groceries',
        'description' => 'Purchase milk, bread, and eggs',
        'status' => 'pending',
    ]);

    \App\Models\Todo::create([
        'title' => 'Finish Laravel project',
        'description' => 'Complete the todo list app',
        'status' => 'completed',
    ]);
}

}
