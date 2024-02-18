@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="w-full py-7 bg-[#EEEBDD] px-7">
        <span class="text-xl md:text-2xl lg:text-2xl font-bold text-black">KITABUL WUDHU</span>
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-5">
            @foreach ($judul as $data)
                <x-molekuls.video-card :data="$data" route="{{ $role }}.video.show" />
            @endforeach
        </div>
        <div class="pt-12">
            {{ $judul->links() }}
        </div>
    </div>
@endsection
