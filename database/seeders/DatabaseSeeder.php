<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the TodoSeeder
        $this->call(TodoSeeder::class);
    }
}
