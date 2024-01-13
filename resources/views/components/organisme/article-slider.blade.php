<div class="w-full min-h-[170px] mt-3 flex gap-5 overflow-x-auto snap-mandatory snap-x custom-x-scrollbar px-5">
    @foreach ($arr_data as $data)
        <x-molekuls.article-card :data="$data" />
    @endforeach
</div>
