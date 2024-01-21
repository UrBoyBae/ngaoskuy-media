<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $identifier=1;
        $user = User::where('username', 'member')->first();
        for ($i = 0; $i < 10; $i++) {
            $question = Question::where('subject','Judul ke '. $identifier)->first();
            Chat::insert([
                'id'=>Uuid::uuid4(),
                'id_question'=>$question->id,
                'id_user'=>$user->id,
            ]);
            $identifier++;
        }
    }
}
