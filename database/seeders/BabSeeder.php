<?php

namespace Database\Seeders;

use App\Models\Bab;
use App\Models\Kitab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kitab = Kitab::where('name', 'Kitabul Wudhu')->first();
        $tayamum = Kitab::where('name', 'Kitabul Tayamum')->first();
        Bab::insert([
            [
                'id' => Uuid::uuid4(),
                'id_kitab' => $kitab->id,
                'name' => 'Wudhu',
            ],
            [
                'id' => Uuid::uuid4(),
                'id_kitab' => $tayamum->id,
                'name' => 'Tayamum',
            ],
        ]);

        $kitabGhusli = Kitab::where('name', 'Kitabul Ghusli')->first();
        Bab::insert([
            'id' => Uuid::uuid4(),
            'id_kitab' => $kitabGhusli->id,
            'name' => 'Ghusli',
        ]);
    }
}
