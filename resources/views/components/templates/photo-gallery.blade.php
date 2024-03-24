@extends('layouts.index')

@php
    $role = empty($roles) ? "user" : $roles[0];
@endphp

@section('mainContent')
    {{-- breadcrumb --}}
    <div class="w-full h-fit pt-4 pb-6 px-7">
        @include('components.atoms.notification-live')
        <x-atoms.breadcrumb-two-index firstIndexName="Home" firstIndexRoute="{{ $role }}.home.index" secondIndexName="Photo Gallery" />
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
