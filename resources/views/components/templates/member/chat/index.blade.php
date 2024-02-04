@extends('layouts.index')

@section('mainContent')
    <div class="w-full min-h-screen pt-7 pb-7 bg-[#EEEBDD] md:px-4 flex flex-col">
        <div>
            <span class="text-2xl font-bold text-black px-7">Detail Pertanyaan</span>
            <div class="px-3 mt-6 flex flex-col gap-6 pb-10">
                @foreach ($chatdetails as $chatdetail)
                    @if ($user_chat_detail->id == $chatdetail->id_user)
                        <div class="flex justify-end">
                            <div class="flex items-end gap-4 pl-3 max-w-[600px]">
                                <div
                                    class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-bl-2xl pt-3 px-6 pb-4 w-full">
                                    <span
                                        class="text-lg text-[#808080] font-semibold text-end">{{ $user_chat_detail->username }}</span>
                                    <span class="text-lg text-[rgba(0,0,0,1)] font-semibold text-end">
                                        {{ $chatdetail->isi }}
                                    </span>
                                </div>
                                <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-9 h-9 rounded-lg">
                            </div>
                        </div>
                    @else
                        <div class="flex justify-start">
                            <div class="flex items-end gap-4 pr-3 max-w-[600px]">
                                <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict"
                                    class="w-9 h-9 rounded-lg">
                                <div
                                    class="flex flex-col border border-[rgba(0,0,0,1)] rounded-t-2xl rounded-br-2xl pt-3 px-6 pb-4 w-full">
                                    <span class="text-lg text-[#808080] font-semibold">ustadz</span>
                                    <span class="text-lg text-[rgba(0,0,0,1)] font-semibold">
                                        {{ $chatdetail->isi }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        @if (Auth::user()->id == $user_chat)
            <div class="mt-auto">
                <form action="{{ route('member.chat.store', $chat_room) }}" method="post">
                    @csrf
                    <div
                        class="w-[375px] mx-1.5 md:w-full md:mx-0 lg:w-full lg:mx-0 border border-[rgba(0,0,0,1)] h-11 rounded-full flex items-center justify-between">
                        <input type="text" name="message" id="message"
                            class=" w-full h-full rounded-full focus:border-none focus:outline-none text-base text-[rgba(0,0,0,1)] font-semibold pl-3 bg-transparent"
                            placeholder="Jawab Pertanyaan">
                        <button type="submit"
                            class="flex items-center justify-center pl-3 pr-4 h-full bg-transparent rounded-full">
                            <ion-icon name="paper-plane-outline" class="text-xl text-black rotate-45"></ion-icon>
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection
