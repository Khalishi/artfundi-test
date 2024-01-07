<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::truncate();

         User::factory()->create([
              'name' => 'Thanyani',
              'email' => 'khalishisimon@gmail.com',
             'password' => bcrypt('password'),
            ]);
    }
}
