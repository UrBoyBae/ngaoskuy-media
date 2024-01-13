<div class="w-full min-h-[160px] mt-3 flex gap-5 overflow-x-auto snap-mandatory snap-x custom-x-scrollbar px-5">
    @foreach ($arr_data as $data)
        <x-molekuls.question-card :data="$data" />
    @endforeach

    @if ($role == "member")
        <a href="">
            <div
                class="bg-[#2E2E2E] min-w-[300px] max-w-[300px] h-[140px] rounded-xl border-[5px] border-dashed flex items-center justify-around px-3 pt-2 pb-3 snap-center">
                <span class="text-center font-bold text-2xl text-[#5D5D5D]">Tambah<br />Pertanyaan</span>
                <ion-icon name="add" class="text-8xl text-[#5D5D5D]"></ion-icon>
            </div>
        </a>
    @endif
</div>
