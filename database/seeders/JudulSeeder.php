<?php

namespace Database\Seeders;

use App\Models\Judul;
use App\Models\SubBab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class JudulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subbab = SubBab::where('name', 'Tentang Wudhu')->first();
        Judul::insert([
            'id' => Uuid::uuid4(),
            'id_subbab' => $subbab->id,
            'name' => 'Apa Itu Wudhu',
        ]);
    }
}
