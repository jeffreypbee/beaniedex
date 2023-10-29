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
            'name' => 'Beanie Baby',
            'plural' => 'Beanie Babies',
            'color' => 'darkred',
            'description' => 'Beanie Babies are super cool.',
            'image' => 'https://people.com/thmb/WU9SGxnrsKnhYg733lL8xyn3f58=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(691x158:693x160)/rare-beanie-babies-080123-5fce126271a74832889ebcada5c1e394.jpg'
        ]);

        ProductLine::factory()->create([
            'name' => 'Beanie Buddy',
            'plural' => 'Beanie Buddies',
            'color' => 'purple'
        ]);

        ProductLine::factory()->create([
            'name' => 'Beanie Boo',
            'plural' => 'Beanie Boos',
            'color' => 'blue'
        ]);

        ProductLine::factory()->create([
            'name' => 'Teenie Beanie',
            'plural' => 'Teenie Beanies',
            'color' => 'pink'
        ]);
    }
}
