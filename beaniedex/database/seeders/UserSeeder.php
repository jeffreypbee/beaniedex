<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user = User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'jeffreypbee@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        // $user->roles()->attach([1, 2, 3]);
    }
}
