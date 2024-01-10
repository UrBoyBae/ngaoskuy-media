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
        Bab::insert([
            'id' => Uuid::uuid4(),
            'id_kitab' => $kitab->id,
            'name' => 'Wudhu',
        ]);
    }
}
