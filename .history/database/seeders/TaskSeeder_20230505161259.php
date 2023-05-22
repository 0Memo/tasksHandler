<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            DB::table('tasks')->insert([
                'name' => fake()->sentence(3),
                'description' => fake()->sentence(12),
                'delay_days' => rand(1440, 10080)
            ]);
        }
    }
}
