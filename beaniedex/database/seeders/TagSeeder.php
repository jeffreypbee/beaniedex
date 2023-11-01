<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create([
            'name' => 'New Face Bear'
        ]);

        Tag::factory()->create([
            'name' => 'Country Bear'
        ]);

        Tag::factory()->create([
            'name' => 'Bird'
        ]);

        Tag::factory()->create([
            'name' => 'Tie Dye'
        ]);
    }
}
