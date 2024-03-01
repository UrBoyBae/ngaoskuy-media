@extends('layouts.index')

@php
    $role = empty($roles) ? 'user' : $roles[0];
@endphp

@section('mainContent')
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
                        <span class="ms-1 text-sm font-bold text-gray-500 md:ms-2 dark:text-gray-500">About Us</span>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    <div class="w-full h-fit pb-9 bg-[#EEEBDD] px-9">
        <div class="w-full">
            <div class="text-center pb-3">
                <p class=" text-black font-bold text-2xl">About Us</p>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <x-atoms.tab-button title="Ngaos Kuy" dataTab="ngaos-kuy" />
            <x-atoms.tab-button title="Eunola" dataTab="eunola" />
        </div>
        <div class="text-center mt-10 tab-content " id="ngaos-kuy">
            <p class="text-black font-bold mb-4">Deskripsi</p>
            <p class="text-[#808080] font-semibold mb-4">Iman, Ilmu, Bersungguh-sungguh, Maksimal, dan Konsisten. Ngaos Kuy!
            </p>
            <p class="text-black font-bold mb-4">Kontak</p>
            <p class="text-[#808080] font-semibold">No Telfon : 082317933850</p>
            <p class="text-[#808080] font-semibold">Email : ngaoskuy2020@gmail.com</p>
            <p class="text-[#808080] font-semibold">Facebook : @ngaoskuymedia</p>
            <p class="text-[#808080] font-semibold">Instagram : @ngaoskuymedia</p>
            <p class="text-[#808080] font-semibold">Youtube : @ngaoskuymedia</p>
            <p class="text-[#808080] font-semibold">Alamat : Jl. Gumuruh No.69, Gumuruh, Kec. Batununggal, Kota Bandung,
                Jawa Barat 40275</p>
        </div>
        <div class="text-center mt-10 tab-content hidden" id="eunola">
            <p class="text-black font-bold mb-4">Deskripsi</p>
            <p class="text-[#808080] font-semibold mb-4">Eunola adalah tim pembuat website ngaos kuy</p>
            <p class="text-black font-bold mb-4">Kontak</p>
            <p class="text-[#808080] font-semibold">Instagram :</p>
            <p class="text-[#808080] font-semibold">@aryarafir</p>
            <p class="text-[#808080] font-semibold">@kevinfrhnh</p>
            <p class="text-[#808080] font-semibold">@aliakbarabdillah_</p>
            <p class="text-[#808080] font-semibold">@ajizahma_</p>
            <p class="text-[#808080] font-semibold">@pashaliasa</p>
        </div>
    </div>
@endsection
