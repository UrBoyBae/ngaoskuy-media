@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="min-h-screen w-full pt-4 px-7">
        @include('components.atoms.notification-live')
        <span class="font-bold text-lg md:text-2xl text-black pt-4">Tambah Pertanyaan</span>
        <div class="min-h-screen w-full mt-3">
            <div class="block w-full p-6 bg-[#EEEBDD] border border-black rounded-lg shadow">
                <form method="POST" action="{{ route($role . '.question.store') }}">
                    @csrf
                        <div class="flex flex-col gap-4 lg:gap-5 xl:gap-6">
                            <div>
                                <label for="subject" class="text-base font-semibold sm:text-xl">Subject</label>
                                <div
                                    class="flex items-center gap-3 border-[1.2px] border-[#000000] rounded-[9px] sm:rounded-[12px] h-8 sm:h-9 pl-2 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                    <input type="text" name="subject" id="subject" placeholder="Tuliskan topik pertanyaan disini"
                                        class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none font-semibold text-sm sm:text-base" required>
                                </div>
                                <div class="items-center gap-1 mt-[3px] hidden" id="error-subject">
                                    <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                    <small class="text-red-700 font-semibold sm:text-sm">Subject</small>
                                </div>
                            </div>
                            <div>
                                <label for="pertanyaan" class="text-base font-semibold sm:text-xl">Pertanyaan</label>
                                <div
                                    class="flex gap-3 border-[1.2px] border-[#000000] rounded-[9px] sm:rounded-[12px] h-24 md:h-[120px] sm:h-9 pl-2 pt-1 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                    <textarea name="pertanyaan" id="pertanyaan" placeholder="Tuliskan pertanyaan anda disini"
                                        class="w-full h-full bg-transparent focus:border-none focus:outline-none font-semibold text-sm sm:text-base"></textarea>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="about" class="block text-base sm:text-xl font-semibold leading-6 text-black">Publikasi
                                    Pertanyaan</label>
                                <div class="flex items-center mb-7">
                                    <input id="country-option-1" type="radio" name="tipe" value="false"
                                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600"
                                        checked>
                                    <label for="country-option-1" class="block ms-2  text-m font-bold text-black ">
                                        Publik </label>
                                    <input id="country-option-2" type="radio" name="tipe" value="true"
                                        class="w-4 h-4 ml-6 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="country-option-2" class="block ms-2 text-m font-bold text-black">
                                        Anonymous </label>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url()->previous() }}">
                            <button type="button"
                                class="w-28 text-white bg-[#810000] font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">BACK</button>
                        </a>
                            <button type="submit"
                                class="w-28 text-white bg-[#1F7632] font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">SEND</button>
                </form>
            </div>
        </div>
    </div>
@endsection
