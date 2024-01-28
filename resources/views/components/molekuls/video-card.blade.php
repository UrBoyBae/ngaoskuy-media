<a href="{{ route($route, $id) }}">
    <div
        class="w-full px-4 py-5 rounded-xl border-2 border-[#CBCDB7] shadow-[-5px_5px_0_0_rgba(130,0,0,1)] flex flex-col justify-between gap-[14px]">
        <img src="{{ $thumbnail }}" alt="subbab" class="rounded-xl w-full">
        <p class="text-base font-semibold text-black line-clamp-2">{{ $name }}</p>
    </div>
</a>
