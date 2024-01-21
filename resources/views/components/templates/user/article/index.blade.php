@extends('layouts.index')

@section('mainContent')
    <div class="w-full pt-7 pb-12 bg-[#EEEBDD] px-7 md:px-10 flex flex-col items-center">
        <div class="flex justify-center items-center">
            <span class="text-2xl font-bold text-black text-center">Latest Update</span>
        </div>
        <div class="flex justify-center items-center">
            <form method="" action="" id="search-form">
                <div class="flex justify-between items-center px-4 mt-6 h-7 w-[300px] md:w-[370px]">
                    <div class="w-full h-full border-[#808080] border-[1.2px] flex justify-center items-center pr-3 rounded-xl">
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
                @foreach ($article as $data )
                    
                <li class="flex justify-center pb-[14px]">
                    <div class="hidden md:block md:pt-1">
                        <span class="text-lg text-[#808080] font-medium">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</span>
                    </div>
                    <div class="relative before:absolute before:left-[45%] before:top-4 before:h-full before:w-[1px] before:bg-[#808080] md:ml-9">
                        <ion-icon name="ellipse-outline" class="text-[#808080] text-lg"></ion-icon>
                    </div>
                    <div class="flex flex-col gap-3 pt-[2px] pb-6 w-full md:w-[65%] lg:w-[70%] ml-4 md:ml-8">
                        <div class="flex flex-col gap-1">
                            <span class="text-xl text-black font-semibold">{{$data->name}}</span>
                            <span class="text-base text-[#808080] font-medium md:hidden">{{ \Carbon\Carbon::parse($data->created_at)->format('F d, Y') }}</span>
                        </div>
                        <p class="text-lg text-[#808080] font-medium line-clamp-3">{{$data->content}} </p>
                        <a href="{{route('user.artikel.show',$data->id)}}">
                            <div class="flex items-end gap-1">
                                <span class="text-lg text-[#810000] font-bold">read more</span>
                                <ion-icon name="chevron-forward-outline" class="text-[#810000] font-bold mb-1"></ion-icon>
                            </div>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection
    