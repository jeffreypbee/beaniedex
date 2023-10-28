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
            'beanie_id' => '5',
            'image' => 'https://treasurekeeper.com/cdn/shop/products/tybb_Sly.jpg?v=1626206089'
        ]);

        BeanieVariant::factory()->create([
            'name' => 'White Belly',
            'beanie_id' => '5',
            'image' => 'https://i5.walmartimages.com/asr/e6a46594-0bdc-4eb1-9121-61924eaab562.23d42d00b743da884ee531d7f1369192.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF'
        ]);
    }
}
