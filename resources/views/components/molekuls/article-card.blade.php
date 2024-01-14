@php
    $date = explode(' ', $created_at);
@endphp
<a href="{{ route("$route", $id) }}">
    <div
        class="min-w-[300px] max-w-[300px] h-[150px] rounded-xl border-2 border-[#CBCDB7] shadow-[-5px_5px_0_0_rgba(130,0,0,1)] snap-center px-5 py-3 flex flex-col gap-3">
        <span class="text-lg font-semibold text-black line-clamp-3">{{ $content }}</span>
        <div class="flex items-center justify-between">
            <p class="text-base font-semibold text-black opacity-50">{{ $date[0] }}</p>
            <ion-icon name="chevron-forward-outline" class="text-3xl"></ion-icon>
        </div>
    </div>
</a>
