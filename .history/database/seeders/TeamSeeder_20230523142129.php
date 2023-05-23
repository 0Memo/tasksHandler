<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 25; $i++) {
            $minRand = 1440 / 1440;
            $maxRand = 20160 / 1440;
            DB::table('teams')->insert([
                'name' => fake()->name()
            ]);
        }
    }
}
