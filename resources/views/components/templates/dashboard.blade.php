@extends('layouts.index')

@section('mainContent')
    @php
        $question = [
            (object) [
                'id' => '1',
                'subject' => '@Username',
                'question' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'status' => '1',
            ],
            (object) [
                'id' => '1',
                'subject' => '@Username',
                'question' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'status' => '0',
            ],
            (object) [
                'id' => '1',
                'subject' => '@Username',
                'question' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'status' => '1',
            ],
        ];

        $article = [
            (object) [
                'id' => '1',
                'subject' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'date' => 'Januari 23, 2024',
            ],
            (object) [
                'id' => '1',
                'subject' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'date' => 'Januari 23, 2024',
            ],
            (object) [
                'id' => '1',
                'subject' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'date' => 'Januari 23, 2024',
            ],
            (object) [
                'id' => '1',
                'subject' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'date' => 'Januari 23, 2024',
            ],
            (object) [
                'id' => '1',
                'subject' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere possimus obcaecati, earum dolorem eligendi perferendis dicta quasi voluptas explicabo.',
                'date' => 'Januari 23, 2024',
            ],
        ];
    @endphp

    <div class="w-full pt-9 bg-[#EEEBDD]">
        @include('components.organisme.episode-slider')
        <div class="w-full mt-5 md:mt-10">
            <div class="flex items-center justify-between pl-8 pr-8 md:pr-12 md:pl-12">
                <span class="text-2xl font-bold text-black">Pertanyaan</span>
                <a href="">
                    <div class="flex justify-center items-center gap-1">
                        <span class="text-base font-semibold md:text-xl">See All</span>
                        <ion-icon name="chevron-forward-outline" class="text-base md:text-xl"></ion-icon>
                    </div>
                </a>
            </div>
            {{-- Masukkan variabel yang menampung data pertanyaan kedalam props ":data" --}}
            {{-- untuk format data bisa disesuaikan dengan data dummy diatas --}}
            <x-organisme.question-slider :data="$question" role="user"/>
        </div>
        <div class="w-full mt-5 md:mt-10">
            <div class="flex items-center justify-between pl-8 pr-8 md:pr-12 md:pl-12">
                <span class="text-2xl font-bold text-black">Artikel</span>
                <a href="">
                    <div class="flex justify-center items-center gap-1">
                        <span class="text-base font-semibold md:text-xl">See All</span>
                        <ion-icon name="chevron-forward-outline" class="text-base md:text-xl"></ion-icon>
                    </div>
                </a>
            </div>
            {{-- Masukkan variabel yang menampung data artikel kedalam props ":data" --}}
            {{-- untuk format data bisa disesuaikan dengan data dummy diatas --}}
            <x-organisme.article-slider :data="$article" />
        </div>
        <div class="flex flex-col lg:mt-3">
            <span class="text-2xl font-bold text-black inline-block text-center w-full mt-7">Kalender</span>
            <div class="w-full px-4 pt-1 pb-8 md:pb-16">
                <div id="calendar-dashboard" class="w-full text-xs lg:text-base px-2 lg:px-10"></div>
            </div>
        </div>
    </div>
@endsection
