@extends('layouts.index')

@php
    $role = empty($roles) ? 'user' : $roles[0];
@endphp

@section('mainContent')
    {{-- breadcrumb --}}
    <div class="w-full h-fit pt-4 pb-6 px-7">
        @include('components.atoms.notification-live')
        <nav class="flex pt-4" aria-label="Breadcrumb">
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
                        <a href="{{ route($role.'.article.index') }}"
                            class="ms-1 text-sm font-bold text-black hover:text-blue-600 md:ms-2 dark:text-black dark:hover:text-[#810000]">Artikel</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-500 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span
                            class="ms-1 text-sm w-40 font-bold truncate text-gray-500 md:ms-2 dark:text-gray-500">{{ $article->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full h-full bg-[#EEEBDD] content-center px-12 pt-3 pb-10 md:px-20 md:py-5 lg:px-36 lg:py-8">
        <p class="text-[18px] font-medium text-[#808080]">{{ $formattedDate }}</p>
        <p class="pt-3 text-[23px] md:text-[25px] lg:text-[28px] font-bold">{{ $article->name }}</p>
        <p class="pt-2 text-[18px] text-justify font-medium text-[#808080]">{{ $article->content }}</p>
    </div>
@endsection
