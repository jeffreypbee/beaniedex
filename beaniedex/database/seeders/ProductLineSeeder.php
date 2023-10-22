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
            'name' => 'Beanie Baby'
        ]);

        ProductLine::factory()->create([
            'name' => 'Beanie Buddy'
        ]);

        ProductLine::factory()->create([
            'name' => 'Beanie Boo'
        ]);

        ProductLine::factory()->create([
            'name' => 'Teenie Beanie'
        ]);
    }
}
