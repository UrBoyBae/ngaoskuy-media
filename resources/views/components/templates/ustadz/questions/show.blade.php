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
                        <a href="{{ route($role.'.question.index') }}"
                            class="ms-1 text-sm font-bold text-black hover:text-blue-600 md:ms-2 dark:text-black dark:hover:text-[#810000]">Pertanyaan</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-500 mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-bold truncate text-gray-500 md:ms-2 dark:text-gray-500">Detail
                            Pertanyaan</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full min-h-screen pt-3 pb-7 bg-[#EEEBDD] md:px-4 flex flex-col">
        <div>
            <span class="text-2xl font-bold text-black px-7">Detail Pertanyaan</span>
            <div class="px-3 mt-6 flex flex-col gap-6 pb-10">
                @foreach ($chatdetails as $chatdetail)
                    @if ($user_chat_detail->id == $chatdetail->id_user)
                        <div class="flex justify-start">
                            <div class="flex items-end gap-4 pl-3 max-w-[600px]">
                                <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-9 h-9 rounded-lg">
                                <div
                                    class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-br-2xl pt-3 px-6 pb-4 w-full">
                                    <span
                                        class="text-lg text-[#808080] font-semibold text-start">{{ $user_chat_detail->username }}</span>
                                    <span class="text-lg text-[rgba(0,0,0,1)] font-semibold text-start">
                                        {{ $chatdetail->isi }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="flex justify-end">
                            <div class="flex items-end gap-4 pr-3 max-w-[600px]">
                                <div
                                    class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-bl-2xl pt-3 px-6 pb-4 w-full">
                                    <span class="text-lg text-[#808080] font-semibold text-end">ustadz</span>
                                    <span class="text-lg text-[rgba(0,0,0,1)] font-semibold text-end">
                                        {{ $chatdetail->isi }}
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict"
                                    class="w-9 h-9 rounded-lg">
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <div class="mt-auto px-3">
            <form action="{{ route('ustadz.question.store', $chat_room) }}" method="post">
                @csrf
                <div class="w-full border border-[rgba(0,0,0,1)] h-11 rounded-full flex items-center justify-between">
                    <input type="text" name="message" id="message" autocomplete="off"
                        class=" w-full h-full rounded-full focus:border-none focus:outline-none text-base text-[rgba(0,0,0,1)] font-semibold pl-3 bg-transparent"
                        placeholder="Jawab Pertanyaan">
                    <button type="submit"
                        class="flex items-center justify-center pl-3 pr-4 h-full bg-transparent rounded-full"
                        id="submit-message" disabled="true">
                        <ion-icon name="paper-plane-outline" class="text-xl text-gray-400 rotate-45"
                            id="send"></ion-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
