<?php

namespace Database\Seeders;

use App\Models\Beanie;
use Illuminate\Database\Seeder;

class BeanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Beanie::factory()->create([
            'name' => 'Peace',
            'species' => 'bear',
            'birthday' => '1996-02-01',
            'poem' => 'All races, all colors, under th sun\n
                        Join hands together and have some fun\n
                        Dance to the music, rock and roll is the sound\n
                        Symbols of peace and love abound!'
        ]);

    }
}
