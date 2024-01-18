<a href="{{ route("$route", $id) }}">
    <div
        class="min-w-[300px] max-w-[{{ $width }}] h-[165px] rounded-xl border-2 border-[#CBCDB7] shadow-[-5px_5px_0_0_rgba(130,0,0,1)] snap-center px-5 py-3 flex flex-col justify-between">
        <div class="flex flex-col">
            <span class="text-lg font-semibold text-black opacity-50 truncate lg:text-xl">{{ $id_user }}</span>
            <p class="text-sm font-semibold text-black line-clamp-3 lg:text-base">{{ $question }}</p>
        </div>
        <div class="flex items-center justify-end">
            <div
                class="flex items-center justify-end border-2 border-blue-500 text-blue-500 rounded-xl text-sm bg-[rgba(95, 95, 95, 0.7)] font-bold px-2 gap-1">
                <span>{{ $status != 1 ? 'Belum Dijawab' : 'Sudah Dijawab' }}</span>
                <ion-icon name="{{ $status != 1 ? 'time-outline' : 'checkmark' }}"></ion-icon>
            </div>
        </div>
    </div>
</a>
