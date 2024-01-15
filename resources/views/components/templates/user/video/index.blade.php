@extends('layouts.index')

@section('mainContent')
    <div class="w-full py-7 bg-[#EEEBDD] px-7">
        <span class="text-2xl font-bold text-black">KITABUL WUDHU</span>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-5">
            @foreach ($judul as $s)
                
            <a href="{{route('user.video.show',$s->id)}}">
                <div class="w-full px-4 py-5 rounded-xl border-2 border-[#CBCDB7] shadow-[-5px_5px_0_0_rgba(130,0,0,1)] flex flex-col justify-between gap-[14px]">
                    <img src="{{$s->episode->first()->thumbnail}}" alt="subbab" class="rounded-xl w-full">
                    <p class="text-base font-semibold text-black line-clamp-2">{{$s->name}}</p>
                </div>
            </a>
            
            @endforeach
        </div>
    </div>
@endsection
