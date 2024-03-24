@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="min-h-screen w-full pt-4 px-7">
        @include('components.atoms.notification-live')
        <span class="font-bold text-lg md:text-2xl text-black pt-4">Edit Artikel</span>
        <div class="min-h-screen w-full mt-3">
            <div class="block w-full p-6 bg-[#EEEBDD] border border-black rounded-lg shadow">
                <form method="POST" action="{{ route($role . '.article.store') }}">
                    @csrf
                    <div class="flex flex-col gap-4 lg:gap-5 xl:gap-6">
                        <div>
                            <label for="artikel" class="text-base font-semibold sm:text-xl">Judul Artikel</label>
                            <div
                                class="flex items-center gap-3 border-[1.2px] border-[#000000] rounded-[9px] sm:rounded-[12px] h-8 sm:h-9 pl-2 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <input type="text" name="artikel" id="artikel"
                                    placeholder="Tuliskan judul artikel disini"
                                    class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none font-semibold text-sm sm:text-base" required>
                            </div>
                            <div class="items-center gap-1 mt-[3px] hidden" id="error-artikel">
                                <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                <small class="text-red-700 font-semibold sm:text-sm">Judul Artikel</small>
                            </div>
                        </div>
                        <div>
                            <label for="isi artikel" class="text-base font-semibold sm:text-xl">Isi Artikel</label>
                            <div class="mb-7 flex gap-3 border-[1.2px] border-[#000000] rounded-[9px] sm:rounded-[12px] h-24 md:h-[120px] sm:h-9 pl-2 pt-1 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <textarea name="isi artikel" id="isi artikel" placeholder="Tuliskan isi artikel disini"
                                    class="w-full h-full bg-transparent focus:border-none focus:outline-none font-semibold text-sm sm:text-base"></textarea>
                            </div>
                        </div>

                    </div>
                    <a href="{{ route($role.'.article.index') }}">
                        <button type="button"
                            class="w-28 text-white bg-[#810000] font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">BACK</button>
                    </a>
                        <button type="edit"
                            class="w-28 text-white bg-[#1F7632] font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">EDIT</button>
                </form>
            </div>
        </div>
    </div>
@endsection
