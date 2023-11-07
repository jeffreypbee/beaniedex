<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BeanieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $productLineSeeder = new ProductLineSeeder();
        $productLineSeeder->run();
       
        $tagSeeder = new TagSeeder();
        $tagSeeder->run();
         
        $beanieSeeder = new BeanieSeeder();
        $beanieSeeder->run();

        $roleSeeder = new RoleSeeder();
        $roleSeeder->run();

        $userSeeder = new UserSeeder();
        $userSeeder->run();
    }
}
