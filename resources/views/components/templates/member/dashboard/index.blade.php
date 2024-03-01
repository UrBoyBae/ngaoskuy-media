@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="w-full pt-8 bg-[#EEEBDD]">
        @include('components.atoms.notification-live')
        @include('components.organisme.episode-slider')
        <div class="w-full mt-5 md:mt-10">
            <div class="flex items-center justify-between pl-8 pr-8 md:pr-12 md:pl-12">
                <span class="text-2xl font-bold text-black">Pertanyaan</span>
                <a href="{{ route($role . '.question.index') }}">
                    <div class="flex justify-center items-center gap-1">
                        <span class="text-base font-semibold md:text-xl">See All</span>
                        <ion-icon name="chevron-forward-outline" class="text-base md:text-xl"></ion-icon>
                    </div>
                </a>
            </div>
            <div class="w-full min-h-[190px] mt-3 flex gap-5 overflow-x-auto snap-mandatory snap-x custom-x-scrollbar px-5">
                {{-- Masukkan variabel yang menampung data pertanyaan kedalam foreach --}}
                @foreach ($question as $data)
                    <x-molekuls.question-card :data="$data" route="{{ $role }}.question.show" width="300px" />
                @endforeach
                <a href="{{ route($role . '.question.create') }}">
                    <div
                        class="bg-[#2E2E2E] min-w-[300px] max-w-[300px] h-[175px] rounded-xl border-[5px] border-dashed flex items-center justify-around px-3 pt-2 pb-3 snap-center">
                        <span class="text-center font-bold text-2xl text-[#5D5D5D]">Tambah<br />Pertanyaan</span>
                        <ion-icon name="add" class="text-8xl text-[#5D5D5D]"></ion-icon>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-full mt-5 md:mt-5">
            <div class="flex items-center justify-between pl-8 pr-8 md:pr-12 md:pl-12">
                <span class="text-2xl font-bold text-black">Artikel</span>
                <a href="{{ route($role . '.article.index') }}">
                    <div class="flex justify-center items-center gap-1">
                        <span class="text-base font-semibold md:text-xl">See All</span>
                        <ion-icon name="chevron-forward-outline" class="text-base md:text-xl"></ion-icon>
                    </div>
                </a>
            </div>
            {{-- Masukkan variabel yang menampung data artikel kedalam foreach --}}
            <div class="w-full min-h-[190px] mt-3 flex gap-5 overflow-x-auto snap-mandatory snap-x custom-x-scrollbar px-5">
                @foreach ($article as $data)
                    <x-molekuls.article-card :data="$data" route="{{ $role }}.article.show" />
                @endforeach
            </div>

        </div>
        <div class="flex flex-col lg:mt-3">
            <span class="text-2xl font-bold text-black inline-block text-center w-full mt-7">Kalender</span>
            <div class="w-full px-4 pt-1 pb-8 md:pb-16">
                <div id="calendar-dashboard" class="w-full text-xs lg:text-base px-2 lg:px-10"></div>
            </div>
        </div>
    </div>
@endsection
