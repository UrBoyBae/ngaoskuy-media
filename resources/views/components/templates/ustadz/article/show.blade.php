@extends('layouts.index')

@section('mainContent')
    <div class="w-full h-full bg-[#EEEBDD] content-center px-12 py-10 md:px-20 md:py-12 lg:px-36 lg:py-20">
        <p class="text-[18px] font-medium text-[#808080]">{{$formattedDate}}</p>
        <p class="pt-3 text-[23px] md:text-[25px] lg:text-[28px] font-bold">{{$article->name}}</p>
        <p class="pt-2 text-[18px] text-justify font-medium text-[#808080]">{{$article->content}}</p>
    </div>
@endsection
