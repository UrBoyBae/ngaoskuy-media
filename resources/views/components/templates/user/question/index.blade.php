@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="w-full pt-7 pb-12 bg-[#EEEBDD] px-7">
        <span class="text-2xl font-bold text-black">Pertanyaan</span>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-5">
            {{-- Masukkan variabel yang menampung data pertanyaan kedalam foreach --}}
            @foreach ($question as $data)
                <x-molekuls.question-card :data="$data" route="{{ $role }}.question.show" />
            @endforeach
        </div>
        <div class="pt-7">
            {{ $question->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
