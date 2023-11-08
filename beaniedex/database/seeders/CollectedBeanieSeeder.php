<?php

namespace Database\Seeders;

use App\Models\CollectedBeanie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectedBeanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CollectedBeanie::factory()->create([
            'user_id' => 1,
            'beanie_id' => 1
        ]);
    }
}
