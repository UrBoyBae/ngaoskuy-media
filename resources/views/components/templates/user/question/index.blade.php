@extends('layouts.index')

@section('mainContent')
    @php
        $question = [
            (object) [
                'id' => '0ea534cc-e86b-4700-8d5f-046c64c81727',
                'id_user' => '5eeff0e4-2f12-4004-aaca-c501050bc0b9',
                'id_episode' => '',
                'subject' => 'Quia qui aut dolorum asperiores rerum architecto consequuntur.',
                'question' => 'Voluptatum accusantium qui sunt minima sapiente ea quis. Omnis qui culpa beatae sapiente sed. Consequatur et error voluptatem aliquid.',
                'tipe' => '1',
                'status' => '1',
                'created_at' => '2024-01-13 23:29:36',
                'failed_at' => '2024-01-13 23:29:36',
            ],
            (object) [
                'id' => '0ea534cc-e86b-4700-8d5f-046c64c81727',
                'id_user' => '5eeff0e4-2f12-4004-aaca-c501050bc0b9',
                'id_episode' => '',
                'subject' => 'Quia qui aut dolorum asperiores rerum architecto consequuntur.',
                'question' => 'Voluptatum accusantium qui sunt minima sapiente ea quis. Omnis qui culpa beatae sapiente sed. Consequatur et error voluptatem aliquid.',
                'tipe' => '1',
                'status' => '1',
                'created_at' => '2024-01-13 23:29:36',
                'failed_at' => '2024-01-13 23:29:36',
            ],
            (object) [
                'id' => '0ea534cc-e86b-4700-8d5f-046c64c81727',
                'id_user' => '5eeff0e4-2f12-4004-aaca-c501050bc0b9',
                'id_episode' => '',
                'subject' => 'Quia qui aut dolorum asperiores rerum architecto consequuntur.',
                'question' => 'Voluptatum accusantium qui sunt minima sapiente ea quis. Omnis qui culpa beatae sapiente sed. Consequatur et error voluptatem aliquid.',
                'tipe' => '1',
                'status' => '1',
                'created_at' => '2024-01-13 23:29:36',
                'failed_at' => '2024-01-13 23:29:36',
            ],
        ];
    @endphp
    <div class="w-full pt-7 pb-12 bg-[#EEEBDD] px-7">
        <span class="text-2xl font-bold text-black">Pertanyaan</span>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-5">
            {{-- Masukkan variabel yang menampung data pertanyaan kedalam foreach --}}
            @foreach ($question as $data)
                <x-molekuls.question-card :data="$data" route="user.pertanyaan.show" />
            @endforeach
        </div>
    </div>
@endsection
