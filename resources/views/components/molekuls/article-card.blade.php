<a href="{{ route("$route", $id) }}">
    <div
        class="min-w-[300px] max-w-[300px] h-[165px] rounded-xl border-2 border-[#CBCDB7] shadow-[-5px_5px_0_0_rgba(130,0,0,1)] snap-center px-5 py-3 flex flex-col  justify-between">
        <div class="flex flex-col gap-[2px]">
            <span class="text-lg font-semibold text-black truncate lg:text-xl">{{ $name }}</span>
            <p class="text-sm lg:text-base text-[#808080] font-medium line-clamp-3">{{ $content }}</p>
        </div>
        <div class="flex items-center justify-between">
            <p class="text-base text-[#808080] font-medium">{{ \Carbon\Carbon::parse($created_at)->format('F d, Y') }}</p>
            <ion-icon name="chevron-forward-outline" class="text-3xl"></ion-icon>
        </div>
    </div>
</a>
