@extends('layouts.index')

@section('mainContent')
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
