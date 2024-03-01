@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    {{-- breadcrumb --}}
    <div class="w-full h-fit py-6 px-7">
        @include('components.atoms.notification-live')
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route($role.'.home.index') }}"
                        class="inline-flex items-center text-sm font-bold text-black hover:text-blue-600 dark:text-black dark:hover:text-[#810000]">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-black mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route($role . '.video.index', $episode->judul->id_subbab) }}"
                            class="ms-1 text-sm font-bold text-black hover:text-blue-600 md:ms-2 dark:text-black dark:hover:text-[#810000]">{{ $bab->kitab->name }}</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-500 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-bold truncate text-gray-500 md:ms-2 dark:text-gray-500">{{ $episode->judul->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full pt-3 pb-12 bg-[#EEEBDD] px-7 lg:px-12 flex flex-col lg:flex-row gap-8">
        <div class="w-full flex flex-col gap-5">
            <iframe class="w-full aspect-video rounded-xl" src="https://www.youtube.com/embed/{{ $episode->video_link }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <div class="flex flex-col gap-3">
            <div class="relative flex flex-col md:justify-between md:flex-row gap-3">
                    <div class="relative flex items-center justify-between">
                        {{-- <span class="font-semibold text-2xl"> menambahkan dropdown download sehingga butuh penyesuaian lagi pada tampilan nya | {{ $episode->name }}</span> --}}
                        <span class="font-semibold text-2xl">{{ $episode->judul->name }} | {{ $episode->name }}</span>
                    </div>
                    <div class="flex items-center justify-center md:w-[150px] gap-3 bg-[#810000] px-5 py-1 rounded-2xl cursor-pointer"
                        id="toggle-download-dropdown">
                        <span class="text-white font-semibold">Download</span>
                        <ion-icon name="chevron-down-outline" class="text-white text-xl"></ion-icon>
                    </div>
                    <div class="hidden md:absolute md:top-10 md:right-0 bg-[#810000] md:w-[150px] p-4 rounded-2xl"
                        id="main-download-dropdown">
                        <a href="{{ route('download.pdf', $episode->id) }}" target="_blank">
                            <div
                                class="flex items-center border-b border-[#d6c3c3]/50 gap-2 bg-[#942626] rounded-t-xl px-3 py-2">
                                <ion-icon name="document-outline" class="text-white text-lg"></ion-icon>
                                <span class="text-white font-semibold">PDF</span>
                            </div>
                        </a>
                        <a href="{{ route('download.audio', $episode->id) }}" target="_blank">
                            <div class="flex items-center border-b border-[#d6c3c3]/50 gap-2 bg-[#942626] px-3 py-2">
                                <ion-icon name="play-forward-outline" class="text-white text-lg"></ion-icon>
                                <span class="text-white font-semibold">AUDIO</span>
                            </div>
                        </a>
                        <a href="{{ route('download.video', $episode->id) }}" target="_blank">
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
