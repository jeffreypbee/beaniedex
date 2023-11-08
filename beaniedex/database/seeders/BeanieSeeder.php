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
        $beanie = Beanie::factory()->create([
            'name' => 'Peace',
            'product_line_id' => 1,
            'species' => 'bear',
            'birthday' => '1996-02-01',
            'image' => 'https://partyquackers.com/wp-content/uploads/2016/04/beanie-babie-peace-the-bear-pq.jpg',
            'poem' => "All races, all colors, under th sun\n
                        Join hands together and have some fun\n
                        Dance to the music, rock and roll is the sound\n
                        Symbols of peace and love abound!"
        ]);
        $beanie->tags()->attach([1, 4]);

        $beanie = Beanie::factory()->create([
            'name' => 'Curly',
            'product_line_id' => 1,
            'species' => 'bear',
            'birthday' => '1996-04-12',
            'image' => 'https://partyquackers.com/wp-content/uploads/2018/02/curly-pq.jpg',
            'poem' => "A bear so cute with hair that's curly\n
                        you will love and want him surely\n
                        To this bear always be true\n
                        He will be a friend to you!"
        ]);
        $beanie->tags()->attach([1]);

        $beanie = Beanie::factory()->create([
            'name' => 'Strut',
            'product_line_id' => 1,
            'species' => 'rooster',
            'birthday' => '1996-03-08',
            'image' => 'https://www.bbtoystore.com/mm5/beanies/strut.jpg',
            'poem' => "Listen closely to \"cock-a-doodle-doo\"\n
                        What's the rooster saying to you?\n
                        Hurry, wake up sleepy head\n
                        We have lots to do, get out of bed!"
        ]);
        $beanie->tags()->attach([3, 4]);

        $beanie = Beanie::factory()->create([
            'name' => 'Mystic',
            'product_line_id' => 1,
            'species' => 'unicorn',
            'birthday' => '1994-05-21',
            'image' => 'https://www.bbtoystore.com/mm5/beanies/mysticfurry.jpg',
            'poem' => "Once upon a time so far away\n
                        A unicorn was born one day in May\n
                        Keep Mystic with you, she's a prize\n
                        You'll see the magic in her blue eyes!"
        ]);
        $beanie->swingTags()->attach([4, 5]);
        $beanie->tushTags()->attach([5, 6]);

        $beanie = Beanie::factory()->create([
            'name' => 'Sly',
            'product_line_id' => 1,
            'species' => 'fox',
            'birthday' => '1996-09-12',
            'number' => '04115',
            'version' => 'Brown Belly',
            'image' => 'https://treasurekeeper.com/cdn/shop/products/tybb_Sly.jpg?v=1626206089',
            'poem' => "Sly is a fox and tricky is he\n
                        Please don't chase him, let him be\n
                        If you want him just say when\n
                        He'll peek out from his den!"
        ]);

        $beanie = Beanie::factory()->create([
            'name' => 'Sly',
            'product_line_id' => 1,
            'species' => 'fox',
            'birthday' => '1996-09-12',
            'number' => '04115',
            'version' => 'White Belly',
            'image' => 'https://i5.walmartimages.com/asr/e6a46594-0bdc-4eb1-9121-61924eaab562.23d42d00b743da884ee531d7f1369192.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF',
            'poem' => "Sly is a fox and tricky is he\n
                        Please don't chase him, let him be\n
                        If you want him just say when\n
                        He'll peek out from his den!"
        ]);

        $beanie = Beanie::factory()->create([
            'name' => 'Congo',
            'product_line_id' => 1,
            'species' => 'gorilla',
            'birthday' => '1996-11-09',
            'image' => 'https://i.ebayimg.com/images/g/pY8AAOSwInxfaE1P/s-l640.jpg',
            'poem' => "Black as the night and fierce is he\n
                        On the ground or in a tree\n
                        Strong and mighty as the Congo\n
                        He's related to our Bongo!"
        ]);

        $beanie = Beanie::factory()->create([
            'name' => 'Puffer',
            'product_line_id' => 1,
            'species' => 'puffin',
            'birthday' => '1997-11-03',
            'image' => 'https://www.bbtoystore.com/mm5/beanies/puffer.jpg',
            'poem' => "What in the world does a puffin do?\n
                        We're sure that you would like to know too\n
                        We asked Puffer how she spends her days\n
                        Before she answered, she flew away!"
        ]);
        $beanie->tags()->attach([3]);

        $beanie = Beanie::factory()->create([
            'name' => 'Twigs',
            'product_line_id' => 1,
            'species' => 'giraffe',
            'birthday' => '1995-05-19',
            'image' => 'https://m.media-amazon.com/images/I/61xzewITExL.jpg'
        ]);

        $beanie = Beanie::factory()->create([
            'name' => 'Schweetheart',
            'product_line_id' => 1,
            'species' => 'orangutan',
            'birthday' => '1999-01-23',
            'image' => 'https://partyquackers.com/wp-content/uploads/2016/03/Beanie-babie-schweetheart-orangatang-pq.jpg'
        ]);

        $beanie = Beanie::factory()->create([
            'name' => 'Jake',
            'product_line_id' => 1,
            'species' => 'duck',
            'birthday' => '1997-04-16',
            'image' => 'https://www.bbtoystore.com/mm5/beanies/jake_540x540.jpg'
        ]);
        $beanie->tags()->attach([3]);

        $beanie = Beanie::factory()->create([
            'name' => 'Osito',
            'product_line_id' => 1,
            'species' => 'bear',
            'birthday' => '1999-02-05',
            'image' => 'https://www.bbtoystore.com/mm5/beanies/osito_540x540.jpg'
        ]);
        $beanie->tags()->attach([1, 2]);

        $beanie = Beanie::factory()->create([
            'name' => 'Rocket',
            'product_line_id' => 1,
            'species' => 'bluejay',
            'birthday' => '1997-03-12',
            'image' => 'https://m.media-amazon.com/images/I/51ZoWy8+QvL.jpg'
        ]);
        $beanie->tags()->attach([3]);

        $beanie = Beanie::factory()->create([
            'name' => 'Beak',
            'product_line_id' => 1,
            'species' => 'kiwi',
            'birthday' => '1998-02-03',
            'image' => 'https://m.media-amazon.com/images/I/61pmz08NoDL._AC_UF894,1000_QL80_.jpg'
        ]);
        $beanie->tags()->attach([3, 4]);
    }
}
