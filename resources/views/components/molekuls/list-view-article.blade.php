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
        <div class="flex flex-col gap-2">
            <div class="flex flex-col gap-1">
                <div class="flex gap-5 items-center">
                    <span class="text-xl text-black font-semibold" id="article-title">{{ $name }}</span>
                    @if ($role == 'ustadz' || $role == 'admin')
                        <div class="hidden md:flex md:gap-3">
                            <a href="{{ route($role . '.article.edit', $id) }}">
                                <div
                                    class="w-8 h-8 lg:w-6 lg:h-6 bg-[#810000] flex justify-center items-center rounded-lg lg:rounded-md">
                                    <ion-icon class="text-white text-lg lg:text-base" name="pencil"></ion-icon>
                                </div>
                            </a>
                            <div class="w-8 h-8 lg:w-6 lg:h-6 bg-[#810000] flex justify-center items-center rounded-lg lg:rounded-md cursor-pointer"
                                id="trigger-delete-article" data-modal-delete="modal-edit-article-{{ $id }}">
                                <ion-icon class="text-white text-lg lg:text-base" name="trash-outline"></ion-icon>
                            </div>
                        </div>
                    @endif
                </div>
                <span
                    class="text-base text-[#808080] font-medium md:hidden">{{ \Carbon\Carbon::parse($created_at)->format('F d, Y') }}</span>
            </div>
            @if ($role == 'ustadz' || $role == 'admin')
                <div class="flex gap-3 md:hidden">
                    <a href="{{ route($role . '.article.edit', $id) }}">
                        <div class="w-8 h-8 bg-[#810000] flex justify-center items-center rounded-lg"><ion-icon
                                class="text-white text-lg" name="pencil"></ion-icon></div>
                    </a>
                    <div class="w-8 h-8 bg-[#810000] flex justify-center items-center rounded-lg cursor-pointer"
                        id="trigger-delete-article" data-modal-delete="modal-edit-article-{{ $id }}"><ion-icon
                            class="text-white text-lg" name="trash-outline"></ion-icon></div>
                </div>
            @endif
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
<div class="fixed top-0 left-0 h-screen w-full bg-black/30 backdrop-blur-sm hidden justify-center items-center z-50"
    id="modal-edit-article-{{ $id }}">
    <div
        class="bg-[#EEEBDD] w-[335px] h-[200px] md:w-[487px] md:h-[246px] flex flex-col justify-center items-center rounded-3xl">
        <span class="text-black text-xl md:text-2xl font-semibold w-[246px] text-center">Anda yakin akan menghapus
            data ini?</span>
        <form action="{{ route($role . '.article.delete', $id) }}" method="POST">
            @csrf
            <div class="flex gap-5 md:gap-12 justify-center mt-8 md:mt-9">
                <div class="bg-[#810000] py-2 w-28 md:w-36 rounded-3xl text-white font-semibold md:text-xl text-center cursor-pointer"
                    id="close-modal-delete-article">BACK</div>
                <button class="bg-[#1F7632] py-2 w-28 md:w-36 rounded-3xl text-white font-semibold md:text-xl"
                    type="submit">DELETE</button>
            </div>
        </form>
    </div>
</div>
