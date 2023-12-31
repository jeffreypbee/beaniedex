<?php

namespace Database\Seeders;

use App\Models\TushTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TushTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i < 10; $i++) {
            TushTag::factory()->create([
                'generation' => $i,
                'product_line_id' => 1
            ]);
        }
    }
}
