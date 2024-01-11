<?php

namespace Database\Seeders;

use App\Models\Article;
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
        Article::insert([
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => $faker->name,
                'content' => $faker->text,
            ],
        ]);
    }
}
