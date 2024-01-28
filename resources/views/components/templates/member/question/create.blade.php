@extends('layouts.index')

@section('mainContent')
    <div class="min-h-screen w-full py-4 px-7">
        <span class="text-2xl font-bold text-black">Tambah Pertanyaan</span>
        <div class="min-h-screen w-full mt-3">
            <div class="block w-full p-6 bg-[#EEEBDD] border border-black rounded-lg shadow">
                <form>
                    <div class="space-y-12">
                        <div class="border-b border-gray-300 pb-6">
                            <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-lg font-bold leading-6 text-black">Subject</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-[12px] shadow-sm ring-1 ring-inset ring-gray-500 focus-within:ring-1 focus-within:ring-inset sm:max-w-md">
                                            <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-3 pl-4 text-gray-700 placeholder-[hsl(0,0%,26%)] font-semibold text-sm sm:text-base focus:outline-none focus:border-none " placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="about" class="block text-lg font-bold leading-6 text-black">Pertanyaan</label>
                                    <div class="mt-2">
                                        <textarea id="about" name="about" rows="3" class="w-[450px] bg-transparent block rounded-[9px] border-b border-gray-300py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-500 placeholder-[hsl(0,0%,26%)]focus:ring-2 focus:ring-inset focus:outline-none focus:border-none py-3 pl-4"></textarea>
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="about" class="block text-lg font-bold leading-6 text-black">Publikasi Pertanyaan</label>
                                    <div class="flex items-center mb-10">
                                        <input id="country-option-1" type="radio" name="countries" value="Publik" class="w-4 h-4  border-gray-300 focus:ring-2 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600" checked>
                                        <label for="country-option-1" class="block ms-2  text-m font-bold text-black "> Publik </label>
                                        <input id="country-option-2" type="radio" name="countries" value="Anonymous" class="w-4 h-4 ml-6 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="country-option-2" class="block ms-2 text-m font-bold text-black"> Anonymous </label>
                                    </div>
                                </div>       
                            </div>
                            <button type="button" class="w-28 text-white bg-[#810000] -500 hover:bg-[#810000] -800 focus:outline-none focus:ring-4 focus:ring-red-300 font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-[#810000] -500 dark:hover:bg-[#810000] -600 dark:focus:ring-red-900">BACK</button>                     
                            <button type="button" class="w-28 text-white bg-[#1F7632] hover:bg-[#1F7632] -800 focus:outline-none focus:ring-4 focus:ring-green-300 font-bold rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-[#1F7632] -600 dark:hover:bg-[#1F7632] -700 dark:focus:ring-[#1F7632] -800">SEND</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
