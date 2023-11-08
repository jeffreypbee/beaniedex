<?php

namespace Database\Seeders;

use App\Models\SwingTag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SwingTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 6; $i++) {
            SwingTag::factory()->create([
                'generation' => $i
            ]);
        }
        
    }
}
