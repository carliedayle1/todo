<?php

namespace Database\Seeders;
use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //man im cooked
        Todo::factory(10)->create();

    }
}