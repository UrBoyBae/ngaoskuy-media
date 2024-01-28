@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="w-full pt-7 pb-12 bg-[#EEEBDD] px-7 md:px-10 flex flex-col items-center">
        <div class="flex justify-center items-center">
            <span class="text-2xl font-bold text-black text-center">Latest Update</span>
        </div>
        <div class="flex justify-center items-center">
            <form method="" action="" id="search-form">
                <div class="flex justify-between items-center px-4 mt-6 h-7 w-[300px] md:w-[370px]">
                    <div
                        class="w-full h-full border-[#808080] border-[1.2px] flex justify-center items-center pr-3 rounded-xl">
                        <input type="text" name="search-input" id="search-input" placeholder="Search"
                            class="w-full h-full pl-3 rounded-l-xl text-sm focus:border-none focus:outline-none placeholder-[#808080] font-medium bg-transparent">
                        <button type="submit" class="flex justify-center items-center" name="search-button"
                            name="search-button">
                            <ion-icon name="search" class="text-[#808080] text-lg"></ion-icon>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-8 md:mt-12 md:w-[90%] lg:w-[80%]">
            <ul>
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
