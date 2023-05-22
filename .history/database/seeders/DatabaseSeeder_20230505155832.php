<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            DB::table('tasks')->insert([
                'name' => fake()->sentence(3),
                'description' => fake()->sentence(12),
                'delay' => rand(1440, 10080)
            ]);
        }
    }
}
