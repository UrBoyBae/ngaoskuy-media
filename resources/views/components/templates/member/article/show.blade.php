@extends('layouts.index')

@php
    $role = empty($roles) ? 'user' : $roles[0];
@endphp

@section('mainContent')
    {{-- breadcrumb --}}
    <div class="w-full h-fit pt-4 pb-6 px-7">
        @include('components.atoms.notification-live')
        <x-atoms.breadcrumb-three-index firstIndexName="Home" firstIndexRoute="{{ $role }}.home.index"
            secondIndexName="Artikel" secondIndexRoute="{{ $role }}.article.index" thirdIndexName="{{ $article->name }}" />
    </div>
    <div class="w-full h-full bg-[#EEEBDD] content-center px-12 pt-3 pb-10 md:px-20 md:py-5 lg:px-36 lg:py-8">
        <p class="text-[18px] font-medium text-[#808080]">{{ $formattedDate }}</p>
        <p class="pt-3 text-[23px] md:text-[25px] lg:text-[28px] font-bold">{{ $article->name }}</p>
        <p class="pt-2 text-[18px] text-justify font-medium text-[#808080]">{{ $article->content }}</p>
    </div>
@endsection
