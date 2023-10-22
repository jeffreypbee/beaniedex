<?php

namespace Database\Seeders;

use App\Models\ProductLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductLine::factory()->create([
            'name' => 'Beanie Babies'
        ]);

        ProductLine::factory()->create([
            'name' => 'Beanie Buddies'
        ]);

        ProductLine::factory()->create([
            'name' => 'Beanie Boos'
        ]);

        ProductLine::factory()->create([
            'name' => 'Teenie Beanies'
        ]);
    }
}
