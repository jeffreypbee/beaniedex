<?php

namespace Database\Seeders;

use App\Models\Beanie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beanie::factory()->create([
            'name' => 'Peace',
            'product_line_id' => 1,
            'species' => 'bear',
            'birthday' => '1996-02-01',
            'poem' => "All races, all colors, under th sun\n
                        Join hands together and have some fun\n
                        Dance to the music, rock and roll is the sound\n
                        Symbols of peace and love abound!"
        ]);

        Beanie::factory()->create([
            'name' => 'Curly',
            'product_line_id' => 1,
            'species' => 'bear',
            'birthday' => '1996-04-12',
            'poem' => "A bear so cute with hair that's curly\n
                        you will love and want him surely\n
                        To this bear always be true\n
                        He will be a friend to you!"
        ]);

        Beanie::factory()->create([
            'name' => 'Strut',
            'product_line_id' => 1,
            'species' => 'rooster',
            'birthday' => '1996-03-08',
            'poem' => "Listen closely to \"cock-a-doodle-doo\"\n
                        What's the rooster saying to you?\n
                        Hurry, wake up sleepy head\n
                        We have lots to do, get out of bed!"
        ]);

        Beanie::factory()->create([
            'name' => 'Mystic',
            'product_line_id' => 1,
            'species' => 'unicorn',
            'birthday' => '1994-05-21',
            'poem' => "Once upon a time so far away\n
                        A unicorn was born one day in May\n
                        Keep Mystic with you, she's a prize\n
                        You'll see the magic in her blue eyes!"
        ]);

        Beanie::factory()->create([
            'name' => 'Sly',
            'product_line_id' => 1,
            'species' => 'fox',
            'birthday' => '1996-09-12',
            'poem' => "Sly is a fox and tricky is he\n
                        Please don't chase him, let him be\n
                        If you want him just say when\n
                        He'll peek out from his den!"
        ]);
    }
}
