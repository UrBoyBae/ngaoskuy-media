<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\ChatDetail;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class ChatDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('username', 'member')->first();
        $ustadz = User::where('username', 'ustadz')->first();
        $identifier=1;
        for ($i = 0; $i < 10; $i++) {
            $question = Question::where('subject','Judul ke '. $identifier)->first();
            $chat = Chat::where('id_question', $question->id)->first();
            ChatDetail::insert([
                [
                    'id'=>Uuid::uuid4(),
                    'id_chat'=>$chat->id,
                    'id_user'=>$user->id,
                    'isi'=>'Blablabla Ohhh jadi gimana pak ustadz kalau jadi yang ke-'.$identifier.'?',
                ],
                [
                    'id'=>Uuid::uuid4(),
                    'id_chat'=>$chat->id,
                    'id_user'=>$ustadz->id,
                    'isi'=>'jadi kalau jadi yang ke-'.$identifier.' tuh ya kira kira begitu!',
                ]
            ]); 
            $identifier++;
        }
    }
}
