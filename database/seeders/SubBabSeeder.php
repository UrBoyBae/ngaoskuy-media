<?php

namespace Database\Seeders;

use App\Models\Bab;
use App\Models\SubBab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class SubBabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bab = Bab::where('name', 'Wudhu')->first();
        SubBab::insert([
            'id' => Uuid::uuid4(),
            'id_bab' => $bab->id,
            'name' => 'Tentang Wudhu',
        ]);
    }
}
