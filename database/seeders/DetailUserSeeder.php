<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::where('username', 'admin')->first();
        $memberUser = User::where('username', 'member')->first();
        $ustadzUser = User::where('username', 'ustadz')->first();



        DetailUser::create([
            'id' => Uuid::uuid4(),
            'id_user' => $adminUser->id,
            'name' => 'admin',
            'profile_link' => null,
        ]);

        DetailUser::create([
            'id' => Uuid::uuid4(),
            'id_user' => $memberUser->id,
            'name' => 'member',
            'profile_link' => null,
        ]);

        DetailUser::create([
            'id' => Uuid::uuid4(),
            'id_user' => $ustadzUser->id,
            'name' => 'ustadz',
            'profile_link' => null,
        ]);
    }
}
