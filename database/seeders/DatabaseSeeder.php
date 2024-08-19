<?php

namespace Database\Seeders;

use App\Models\posts\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::factory(50)->create();

        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}
