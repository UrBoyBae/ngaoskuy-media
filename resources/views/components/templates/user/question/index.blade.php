@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    {{-- breadcrumb --}}
    <div class="w-full h-fit py-6 px-7">
        @include('components.atoms.notification-live')
        <nav class="flex" aria-label="Breadcrumb">
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
                        <span class="ms-1 text-sm font-bold text-gray-500 md:ms-2 dark:text-gray-500">Pertanyaan</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full pt-3 pb-12 bg-[#EEEBDD] px-7">
        <span class="text-2xl font-bold text-black">Pertanyaan</span>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-5">
            {{-- Masukkan variabel yang menampung data pertanyaan kedalam foreach --}}
            @foreach ($question as $data)
                <x-molekuls.question-card :data="$data" route="{{ $role }}.question.show" />
            @endforeach
        </div>
        <div class="pt-12">
            {{ $question->links('pagination::tailwind') }}
        </div>
    </div>
@endsection
