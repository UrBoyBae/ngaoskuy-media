<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $createdAt = Carbon::now()->subDays($i);
            $updatedAt = Carbon::now(); 
        
            Article::insert([
                'id' => Uuid::uuid4(),
                'name' => $faker->sentence(5),
                'content' => $faker->text,
                'created_at' => $createdAt,
                'updated_at' => $updatedAt,
            ]);
        }
    }
}
