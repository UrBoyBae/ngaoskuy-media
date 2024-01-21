@extends('layouts.index')

@section('mainContent')
    
    <div class="w-full pt-7 pb-12 bg-[#EEEBDD] px-7">
        <span class="text-2xl font-bold text-black">Pertanyaan</span>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 mt-5">
            {{-- Masukkan variabel yang menampung data pertanyaan kedalam foreach --}}
            @foreach ($question as $data)
            <a href="{{ route('user.pertanyaan.show', $data->id) }}">
                <div
                    class="min-w-[300px] max-w-[full] h-[165px] rounded-xl border-2 border-[#CBCDB7] shadow-[-5px_5px_0_0_rgba(130,0,0,1)] snap-center px-5 py-3 flex flex-col justify-between">
                    <div class="flex flex-col">
                        <span class="text-lg font-semibold text-black opacity-50 truncate lg:text-xl">{{ $data->id_user }}</span>
                        <p class="text-sm font-semibold text-black line-clamp-3 lg:text-base">{{ $data->question }}</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <div
                            class="flex items-center justify-end border-2 border-blue-500 text-blue-500 rounded-xl text-sm bg-[rgba(95, 95, 95, 0.7)] font-bold px-2 gap-1">
                            <span>{{ $data->status != 1 ? 'Belum Dijawab' : 'Sudah Dijawab' }}</span>
                            <ion-icon name="{{ $data->status != 1 ? 'time-outline' : 'checkmark' }}"></ion-icon>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection
