<?php

namespace Database\Seeders;

use App\Models\Kitab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class KitabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kitab::insert([
            [
                'id' => Uuid::uuid4(),
                'name' => 'Kitabul Wudhu',
                'description' => 'Berisikan penjelasan penjelasan sesuai dengan Hadits Bukhari tentang wudhu',
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => 'Kitabul Tayamum',
                'description' => 'Berisikan penjelasan penjelasan sesuai dengan Hadits Bukhari tentang Tayamum',
            ],
            [
                'id' => Uuid::uuid4(),
                'name' => 'Kitabul Ghusli',
                'description' => 'Berisikan penjelasan penjelasan sesuai dengan Hadits Bukhari tentang Mandi',
            ],
        ]);
    }
}
