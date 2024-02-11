<li class="flex justify-center pb-[14px]" id="article">
    <div class="hidden md:block md:pt-1">
        <span
            class="text-lg text-[#808080] font-medium">{{ \Carbon\Carbon::parse($created_at)->format('F d, Y') }}</span>
    </div>
    <div
        class="relative before:absolute before:left-[45%] before:top-4 before:h-full before:w-[1px] before:bg-[#808080] md:ml-9">
        <ion-icon name="ellipse-outline" class="text-[#808080] text-lg"></ion-icon>
    </div>
    <div class="flex flex-col gap-3 pt-[2px] pb-6 w-full md:w-[65%] lg:w-[70%] ml-4 md:ml-8">
        <div class="flex flex-col gap-1">
            <span class="text-xl text-black font-semibold" id="article-title">{{ $name }}</span>
            <span
                class="text-base text-[#808080] font-medium md:hidden">{{ \Carbon\Carbon::parse($created_at)->format('F d, Y') }}</span>
        </div>
        <p class="text-lg text-[#808080] font-medium line-clamp-3">{{ $content }} </p>
        <a href="{{ route($route, $id) }}">
            <div class="flex items-end gap-1">
                <span class="text-lg text-[#810000] font-bold">read more</span>
                <ion-icon name="chevron-forward-outline" class="text-[#810000] font-bold mb-1"></ion-icon>
            </div>
        </a>
    </div>
</li>
