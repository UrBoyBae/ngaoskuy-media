@extends('layouts.index')

@section('mainContent')
    @php
        $role = empty($roles) ? 'user' : $roles[0];
    @endphp
    <div class="min-h-screen py-4 px-7">
        <span class="text-center font-bold text-lg md:text-2xl text-black">Status Pertanyaan</span>
        <div class="flex flex-col items-center justify-center">
            <div class="mt-4 w-full p-6 bg-[#EEEBDD] border border-black rounded-lg shadow">
                <form>
                    <div class="flex flex-col gap-4 lg:gap-5 xl:gap-6">
                        <div>
                            <label for="subject" class="text-base font-semibold sm:text-xl">Subjek</label>
                            <div
                                class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-8 sm:h-9 pl-2 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <input type="text" name="subject" id="subject" placeholder="{{ $question->subject }}"
                                    class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-sm sm:text-base"
                                    disabled>
                            </div>
                            <div class="items-center gap-1 mt-[3px] hidden" id="error-subject">
                                <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                <small class="text-red-700 font-semibold sm:text-sm">Subjek</small>
                            </div>
                        </div>
                        <div>
                            <label for="pertanyaan" class="text-base font-semibold sm:text-xl">Pertanyaan</label>
                            <div
                                class="flex gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-24 md:h-[120px] sm:h-9 pl-2 pt-1 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <textarea name="pertanyaan" id="pertanyaan"
                                    class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none font-semibold text-sm sm:text-base"
                                    disabled>{{ $question->question }}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="md:flex flex-row">
                        @if ($question->status == false)
                            <button type="button"
                                class="text-black bg-[#D9D9D9] border-4 border-[#FFF500] font-bold rounded-[23px] h-[46px] w-[220px] md:w-[250px] mt-5 lg:mr-5 text-sm md:text-lg px-5 py-2.5 flex items-center justify-center me-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30"
                                    fill="none" class="mr-2">
                                    <path
                                        d="M14.6073 0.647461C6.68501 0.647461 0.203125 7.12934 0.203125 15.0516C0.203125 22.9739 6.68501 29.4558 14.6073 29.4558C22.5296 29.4558 29.0115 22.9739 29.0115 15.0516C29.0115 7.12934 22.5296 0.647461 14.6073 0.647461ZM14.6073 4.24851C20.585 4.24851 25.4104 9.07391 25.4104 15.0516C25.4104 21.0294 20.585 25.8548 14.6073 25.8548C8.62957 25.8548 3.80417 21.0294 3.80417 15.0516C3.80417 9.07391 8.62957 4.24851 14.6073 4.24851ZM12.8068 7.84955V15.8439L13.3829 16.312L15.1835 18.1125L16.4078 19.4809L19.0006 16.8882L17.6322 15.6638L16.4078 14.4395V7.92157H12.8068V7.84955Z"
                                        fill="#FFF500" />
                                </svg>
                                <span class="ml-2">Belum Dijawab</span>
                            </button>
                            <a href="{{route($role.'.chat.index',$chat->id)}}">
                                <button type="button"
                                    class="text-black bg-[#D9D9D9] border-4 border-[#6EBCF4] font-bold rounded-[23px] h-[46px] w-[220px] md:w-[280px] mt-5 text-sm md:text-lg px-5 py-2.5 flex items-center justify-center me-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 27 27" fill="none" class="mr-2">
                                        <path
                                            d="M13.4364 13.5L13.5 18.6111M13.5 25C7.14873 25 2 19.8513 2 13.5C2 7.14873 7.14873 2 13.5 2C19.8513 2 25 7.14873 25 13.5C25 19.8513 19.8513 25 13.5 25ZM13.5636 8.38889V8.51667L13.4364 8.51692V8.38889H13.5636Z"
                                            stroke="#6EBCF4" stroke-width="4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span class="ml-2">Detail Pertanyaan</span>
                                </button>
                            </a>
                        @else
                            <button type="button"
                                class="text-black bg-[#D9D9D9] border-4 border-green-500 font-bold rounded-[23px] h-[46px] w-[220px] md:w-[250px] mt-5 lg:mr-5 text-sm md:text-lg px-5 py-2.5 flex items-center justify-center me-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="23" viewBox="0 0 31 23"
                                    fill="none" class="mr-2">
                                    <path
                                        d="M10.2643 22.0934L0.442554 12.2716C-0.147518 11.6816 -0.147518 10.7248 0.442554 10.1347L2.57943 7.99775C3.16951 7.40762 4.1263 7.40762 4.71637 7.99775L11.3328 14.6141L25.5044 0.442554C26.0944 -0.147518 27.0512 -0.147518 27.6413 0.442554L29.7782 2.57949C30.3683 3.16957 30.3683 4.1263 29.7782 4.71643L12.4012 22.0934C11.8111 22.6835 10.8544 22.6835 10.2643 22.0934Z"
                                        fill="#1AC221" />
                                </svg>
                                <span class="ml-2">Sudah Dijawab</span>
                            </button>
                            <a href="{{route($role.'.chat.index',$chat->id)}}">
                                <button type="button"
                                    class="text-black bg-[#D9D9D9] border-4 border-[#6EBCF4] font-bold rounded-[23px] h-[46px] w-[220px] md:w-[280px] mt-5 text-sm md:text-lg px-5 py-2.5 flex items-center justify-center me-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 27 27" fill="none" class="mr-2">
                                        <path
                                            d="M13.4364 13.5L13.5 18.6111M13.5 25C7.14873 25 2 19.8513 2 13.5C2 7.14873 7.14873 2 13.5 2C19.8513 2 25 7.14873 25 13.5C25 19.8513 19.8513 25 13.5 25ZM13.5636 8.38889V8.51667L13.4364 8.51692V8.38889H13.5636Z"
                                            stroke="#6EBCF4" stroke-width="4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span class="ml-2">Detail Pertanyaan</span>
                                </button>
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        @if ($question->status==false)
            
        @else
        <div class="mt-5">
            <span class="text-center font-bold text-lg md:text-2xl text-black">Episode Dengan Jawaban Anda</span>
            <div class="w-full flex gap-6 mt-4 overflow-x-auto snap-mandatory snap-x custom-x-scrollbar">
                <a href="{{route($role.'.video.display',$episode->first()->id)}}">
                    <div class="min-w-[286px] max-w-[286px] flex flex-col gap-2">
                        <img class="w-full rounded-xl" src="https://i.ytimg.com/vi/y6wKBTszalY/maxresdefault.jpg"
                            alt="another-video">
                        <span class="font-semibold text-xl">{{$episode->first()->judul->name}} | {{$episode->first()->name}}</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="mt-3">
            <span class="text-center font-bold text-lg md:text-2xl text-black">Episode Dengan Judul yang Sama</span>
            <div class="w-full flex gap-6 mt-4 overflow-x-auto snap-mandatory snap-x custom-x-scrollbar">
                @foreach ($judul->first()->episode as $episode)
                    <a href="{{route($role.'.video.display',$episode->id)}}">
                        <div class="min-w-[286px] max-w-[286px] flex flex-col gap-2">
                            <img class="w-full rounded-xl" src="{{$episode->thumbnail}}"
                                alt="another-video">
                            <span class="font-semibold text-xl">{{$episode->judul->name}} | {{$episode->name}}</span>
                        </div>
                    </a>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection
