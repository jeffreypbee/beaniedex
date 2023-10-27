<?php

namespace Database\Seeders;

use App\Models\BeanieVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeanieVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BeanieVariant::factory()->create([
            'name' => 'Brown Belly',
            'beanie_id' => '5'
        ]);

        BeanieVariant::factory()->create([
            'name' => 'White Belly',
            'beanie_id' => '5'
        ]);
    }
}
