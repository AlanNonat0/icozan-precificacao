<?php

namespace Database\Seeders;

use App\Models\Commercial\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            ['id' => 1, 'name' => 'starter', 'price' => 65.90],
            ['id' => 2, 'name' => 'medium', 'price' => 129.90],
            ['id' => 3, 'name' => 'premium', 'price' => 197.90],
        ];

        foreach ($contents as $data) {
            Plan::firstOrcreate($data);
        }
    }
}
