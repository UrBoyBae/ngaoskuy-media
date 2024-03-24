@extends('layouts.index')

@php
    $role = empty($roles) ? 'user' : $roles[0];
@endphp

@section('mainContent')
    {{-- breadcrumb --}}
    <div class="w-full h-fit pt-4 pb-6 px-7">
        @include('components.atoms.notification-live')
        <x-atoms.breadcrumb-three-index firstIndexName="Home" firstIndexRoute="{{ $role }}.home.index"
            secondIndexName="Pertanyaan" secondIndexRoute="{{ $role }}.question.index" thirdIndexName="Detail Pertanyaan" />
    </div>
    <div class="w-full pt-3 pb-12 bg-[#EEEBDD] md:px-4">
        <span class="text-2xl font-bold text-black px-7">Detail Pertanyaan</span>
        <div class="px-3 mt-6 flex flex-col gap-6">
            @foreach ($chatdetail as $data)
                @if ($data->user->username == 'ustadz')
                    <div class="flex justify-end">
                        <div class="flex items-end gap-4 pl-3 max-w-[600px]">
                            <div
                                class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-bl-2xl pt-3 px-6 pb-4 w-full">
                                <span
                                    class="text-lg text-[#808080] font-semibold text-end">{{ $data->user->username }}</span>
                                <span class="text-lg text-[rgba(0,0,0,1)] font-semibold text-end">
                                    {{ $data->isi }}
                                </span>
                            </div>
                            <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-9 h-9 rounded-lg">
                        </div>
                    </div>
                @else
                    <div class="flex justify-start">
                        <div class="flex items-end gap-4 pr-3 max-w-[600px]">
                            <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-9 h-9 rounded-lg">
                            <div
                                class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-br-2xl pt-3 px-6 pb-4 w-full">
                                <span class="text-lg text-[#808080] font-semibold">{{ $data->user->username }}</span>
                                <span class="text-lg text-[rgba(0,0,0,1)] font-semibold">
                                    {{ $data->isi }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
