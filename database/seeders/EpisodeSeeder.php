<?php

namespace Database\Seeders;

use App\Models\Episode;
use App\Models\Judul;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $judul = Judul::where('name','Apa Itu Wudhu')->first();
        Episode::insert([
            'id'=>Uuid::uuid4(),
            'id_judul'=>$judul->id,
            'name'=>'satu',
            'thumbnail'=>'https://i.ytimg.com/vi/5zFL_p22lPg/maxresdefault.jpg',
            'video_link'=>'5zFL_p22lPg',
            'resume'=>$faker->text
        ]);

        $judulGhusli = Judul::where('name','Apa Itu Ghusli')->first();
        Episode::insert([
            'id' => Uuid::uuid4(),
            'id_judul'=>$judulGhusli->id,
            'name' => 'satu',
            'thumbnail'=>'https://i.ytimg.com/vi/5zFL_p22lPg/maxresdefault.jpg',
            'video_link'=>'5zFL_p22lPg',
            'resume' => $faker->text()
        ]);

    }
}
