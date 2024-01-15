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
        $tayamum = Bab::where('name', 'Tayamum')->first();
        SubBab::insert([
            [
                'id' => Uuid::uuid4(),
                'id_bab' => $bab->id,
                'name' => 'Tentang Wudhu',
            ],
            [
                'id' => Uuid::uuid4(),
                'id_bab' => $tayamum->id,
                'name' => 'Tentang Tayamum',
            ],
        ]);

        $babGhusli = Bab::where('name', 'Ghusli')->first();
        SubBab::insert([
            'id' => Uuid::uuid4(),
            'id_bab' => $babGhusli->id,
            'name' => 'Tentang Ghusli'
        ]);
    }
}
