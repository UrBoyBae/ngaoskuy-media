<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $user = User::where('username', 'member')->first();
        for ($i = 0; $i < 10; $i++) {
            Question::create([
                'id' => Uuid::uuid4(),
                'id_user' => $user->id,
                'id_episode' => null,
                'subject' => $faker->sentence,
                'question' => $faker->paragraph,
                'tipe' => 0,
                'status' => 0,
            ]);
        }
    }
}
