@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="pt-3">
        @include('components.atoms.notification-live')
    </div>
    <div class="w-full pt-8 pb-12 bg-[#EEEBDD] px-7 md:px-10 flex flex-col items-center">
        <div class="flex justify-center items-center">
            <span class="text-2xl font-bold text-black text-center">Latest Update</span>
        </div>
        <div class="flex justify-center items-center">
            <div class="flex justify-between items-center px-4 mt-6 h-7 w-[300px] md:w-[370px]">
                <div
                    class="w-full h-full border-[#808080] border-[1.2px] flex justify-center items-center pr-3 rounded-xl">
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
