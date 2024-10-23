<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class todoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //xddd
        Todo::factory(10)->create();
    }
}
