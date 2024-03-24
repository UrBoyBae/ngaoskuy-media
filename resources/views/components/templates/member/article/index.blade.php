@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
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
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-500 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-bold text-gray-500 md:ms-2 dark:text-gray-500">Artikel</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full pb-12 bg-[#EEEBDD] px-7 md:px-10 flex flex-col items-center">
        <div class="flex justify-center items-center">
            <span class="text-2xl font-bold text-black text-center">Latest Update</span>
        </div>
        <div class="flex justify-center items-center">
            <div class="flex justify-between items-center px-4 mt-6 h-7 w-[300px] md:w-[370px]">
                <div class="w-full h-full border-[#808080] border-[1.2px] flex justify-center items-center pr-3 rounded-xl">
                    <input type="text" name="search-article" id="search-article" placeholder="Cari Artikel"
                        class="w-full h-full pl-3 rounded-l-xl text-sm focus:border-none focus:outline-none placeholder-[#808080] font-medium bg-transparent">
                    <ion-icon name="search" class="text-[#808080] text-lg"></ion-icon>
                </div>
            </div>
        </div>
        <div class="mt-8 md:mt-12 md:w-[90%] lg:w-[80%]">
            <ul id="article-list">
                @foreach ($article as $data)
                    <x-molekuls.list-view-article :data="$data" route="{{ $role }}.article.show" />
                @endforeach
            </ul>
        </div>
        <div class="w-full pt-12">
            {{ $article->links() }}
        </div>
    </div>
@endsection
