@extends('layouts.index')

@section('mainContent')
    <div class="w-full pt-8 pb-12 bg-[#EEEBDD] px-7 lg:px-12 flex flex-col lg:flex-row gap-8">
        <div class="w-full flex flex-col gap-5">
            <iframe class="w-full aspect-video rounded-xl" src="https://www.youtube.com/embed/{{$episode->video_link}}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <div class="flex flex-col gap-3">
                <span class="font-semibold text-2xl">{{$episode->judul->name}} | {{$episode->name}}</span>
                <div class="flex flex-col gap-1">
                    <span class="font-semibold text-xl">Resume</span>
                    <p class="font-medium text-lg text-justify">{{$episode->resume}}</p>
                </div>
            </div>
        </div>
        <div class="w-fit grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-5 justify-items-stretch">
            @foreach ($episodelist as $data)
                <a href="{{route('user.video.display',$data->id)}}">
                    <div class="w-full max-w-[369px] flex flex-col gap-2">
                        <img class="w-full rounded-xl" src="https://i.ytimg.com/vi/{{$data->video_link}}/maxresdefault.jpg"
                        alt="another-video">
                        <span class="font-semibold text-xl">{{$data->judul->name}} | {{$data->name}}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
