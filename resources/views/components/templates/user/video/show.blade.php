@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="w-full pt-8 pb-12 bg-[#EEEBDD] px-7 lg:px-12 flex flex-col lg:flex-row gap-8">
        <div class="w-full flex flex-col gap-5">
            <iframe class="w-full aspect-video rounded-xl" src="https://www.youtube.com/embed/{{ $episode->video_link }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <div class="flex flex-col gap-3">
                <span class="font-semibold text-2xl">{{ $episode->judul->name }} | {{ $episode->name }}</span>
                <div class="flex flex-col gap-1">
                    <span class="font-semibold text-xl">Resume</span>
                    <p class="font-medium text-lg text-justify">{{ $episode->resume }}</p>
                </div>
            </div>
        </div>
        <div class="w-fit grid grid-cols-1 md:grid-cols-2 lg:flex lg:flex-col gap-5 justify-items-stretch">
            @foreach ($episodelist as $data)
                <x-molekuls.video-display :data="$data" route="{{ $role }}.video.display" />
            @endforeach
        </div>
    </div>
@endsection
