<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for ($i = 0; $i < 25; $i++) {
            $minRand = 1440 / 1440;
            $maxRand = 20160 / 1440;
            DB::table('tasks')->insert([
                'name' => fake()->sentence(3),
                'description' => fake()->sentence(12),
                'delay_days' => rand($minRand, $maxRand)
            ]);
        }
    }
}
