<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            KitabSeeder::class,
            BabSeeder::class,
            SubBabSeeder::class,
            JudulSeeder::class,
            DetailUserSeeder::class,
            QuestionSeeder::class,
            ArticleSeeder::class,
            EpisodeSeeder::class
        ]);
    }
}
