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
                <div class="relative flex items-center justify-between">
                    <span class="font-semibold text-2xl">{{ $episode->judul->name }} | {{ $episode->name }}</span>
                    <div class="flex items-center justify-center gap-3 bg-[#810000] px-5 py-1 rounded-2xl cursor-pointer"
                        id="toggle-download-dropdown">
                        <span class="text-white font-semibold">Download</span>
                        <ion-icon name="chevron-down-outline" class="text-white text-xl"></ion-icon>
                    </div>
                    <div class="hidden absolute top-10 right-0 bg-[#810000] w-[150px] p-4 rounded-2xl"
                        id="main-download-dropdown">
                        <a href="{{route('download.pdf',$episode->id)}}" target="_blank">
                            <div
                                class="flex items-center border-b border-[#d6c3c3]/50 gap-2 bg-[#942626] rounded-t-xl px-3 py-2">
                                <ion-icon name="document-outline" class="text-white text-lg"></ion-icon>
                                <span class="text-white font-semibold">PDF</span>
                            </div>
                        </a>
                        <a href="" target="_blank">
                            <div class="flex items-center border-b border-[#d6c3c3]/50 gap-2 bg-[#942626] px-3 py-2">
                                <ion-icon name="play-forward-outline" class="text-white text-lg"></ion-icon>
                                <span class="text-white font-semibold">AUDIO</span>
                            </div>
                        </a>
                        <a href="" target="_blank">
                            <div class="flex items-center gap-2 bg-[#942626] rounded-b-xl px-3 py-2">
                                <ion-icon name="play-circle-outline" class="text-white text-lg"></ion-icon>
                                <span class="text-white font-semibold">VIDEO</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <span class="font-semibold text-xl">Resume</span>
                    <p class="font-medium text-lg text-justify">{!! nl2br(e($episode->resume)) !!}</p>
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
