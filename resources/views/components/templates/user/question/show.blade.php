@extends('layouts.index')

@section('mainContent')
    <div class="w-full pt-7 pb-12 bg-[#EEEBDD] md:px-4">
        <span class="text-2xl font-bold text-black px-7">Detail Pertanyaan</span>
        <div class="px-3 mt-6 flex flex-col gap-6">
            <div class="flex justify-start">
                <div class="flex items-end gap-4 pr-3 max-w-[600px]">
                    <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-9 h-9 rounded-lg">
                    <div class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-br-2xl pt-3 px-6 pb-4 w-full">
                        <span class="text-lg text-[#808080] font-semibold">@username</span>
                        <span class="text-lg text-[rgba(0,0,0,1)] font-semibold">
                            Bagaimana tata cara wudhu yang baik dan benar menurut Islam?
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="flex items-end gap-4 pl-3 max-w-[600px]">
                    <div class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-bl-2xl pt-3 px-6 pb-4 w-full">
                        <span class="text-lg text-[#808080] font-semibold text-end">@username</span>
                        <span class="text-lg text-[rgba(0,0,0,1)] font-semibold text-end">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore, totam dolor non necessitatibus nihil mollitia?
                        </span>
                    </div>
                    <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-9 h-9 rounded-lg">
                </div>
            </div>
        </div>
    </div>
@endsection
