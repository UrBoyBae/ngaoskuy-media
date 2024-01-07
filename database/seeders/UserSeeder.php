<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'id' => Uuid::uuid4(),
            'username' => 'admin',
            'email' => 'admin@ngaoskuy.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $member = User::create([
            'id' => Uuid::uuid4(),
            'username' => 'member',
            'email' => 'member@email.com',
            'password' => bcrypt('member')
        ]);
        $member->assignRole('member');

        $guest = User::create([
            'id' => Uuid::uuid4(),
            'username' => 'guest',
            'email' => 'guest@ngakuy.com',
            'password' => 'guest'
        ]);
        $guest->assignRole('guest');

        $ustadz = User::create([
            'id' => Uuid::uuid4(),
            'username' => 'ustadz',
            'email' => 'ustadz@ngaoskuy.com',
            'password' => bcrypt('ustadz')
        ]);
        $ustadz->assignRole('ustadz');
    }
}
