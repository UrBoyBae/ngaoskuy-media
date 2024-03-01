@extends('layouts.index')

@php
    $role = empty($roles) ? "user" : $roles[0];
@endphp

@section('mainContent')
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
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-500 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-bold text-gray-500 md:ms-2 dark:text-gray-500">Photo Gallery</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full h-full bg-[#EEEBDD] lg:px-40 px-9 pb-9">
        <div class="text-center pb-3">
            <p class=" text-black font-bold text-2xl">Photo Gallery</p>
        </div>
        <div class="flex flex-col lg:flex-row items-center gap-5 mt-4">
            <div class="md:flex">
                <img class="object-cover h-24 w-48 lg:w-[404px] lg:h-[193px] rounded-lg"
                    src="{{ asset('assets/images/gambar1.jpg') }}">
            </div>
            <div class="w-full h-auto">
                <p class="block mt-3 text-lg text-black font-semibold">Kegiatan Pengajian</p>
                <p class="mt-3 text-slate-500">Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                    molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem
                    sollicitudin lacus, ut interdum tellus elit sed risus. </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row-reverse mt-8 items-center gap-5">
            <div class="md:flex">
                <img class="object-cover h-24 w-48 lg:w-[404px] lg:h-[193px] rounded-lg"
                    src="{{ asset('assets/images/gambar2.jpeg') }}">
            </div>
            <div class="w-full h-auto">
                <p class="block mt-3 text-lg text-black font-semibold">Kegiatan Pengajian</p>
                <p class="mt-3 text-slate-500">Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                    molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem
                    sollicitudin lacus, ut interdum tellus elit sed risus. </p>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row mt-8 items-center gap-5">
            <div class="md:flex">
                <img class="object-cover h-24 w-48 lg:w-[404px] lg:h-[193px] rounded-lg"
                    src="{{ asset('assets/images/gambar3.jpeg') }}">
            </div>
            <div class="w-full h-auto">
                <p class="block mt-3 text-lg text-black font-semibold">Kegiatan Pengajian</p>
                <p class="mt-3 text-slate-500">Horem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis
                    molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem
                    sollicitudin lacus, ut interdum tellus elit sed risus. </p>
            </div>
        </div>
    </div>
@endsection
