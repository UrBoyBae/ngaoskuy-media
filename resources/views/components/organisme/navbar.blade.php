<div class="w-full py-3 px-5 bg-[#810000] flex justify-between items-center">
    <ion-icon name="menu" class="cursor-pointer text-white text-xl lg:text-2xl" id="toggle-sidebar"></ion-icon>
    <div class="hidden z-50 inset-0" id="main-sidebar">
        <div class="fixed inset-0 bg-black/30 backdrop-blur-sm"></div>
        <div class="relative bg-white w-72 h-screen overflow-y-auto">
            <div class="sticky top-0 backdrop-blur-sm bg-white/30 px-6 pt-6 pb-7">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="border p-1 flex items-center rounded-lg shadow-sm mr-4">
                            <ion-icon name="grid" size="small" class="text-[#810000]"></ion-icon>
                        </div>
                        <span class="font-bold text-[#810000] text-xl">Kategori</span>
                    </div>
                    <ion-icon name="close" id="close-sidebar"
                        class="text-2xl cursor-pointer text-slate-900"></ion-icon>
                </div>
                <form method="" action="" id="search-form">
                    <div class="flex justify-between items-center px-4 mt-6 h-7">
                        <div
                            class="w-full h-full border-[#808080] border-[1.2px] flex justify-center items-center pr-3 rounded-xl">
                            <input type="text" name="search-input" id="search-input" placeholder="Search"
                                class="w-full h-full pl-3 rounded-l-xl text-sm focus:border-none focus:outline-none placeholder-[#808080] font-medium">
                            <button type="submit" class="flex justify-center items-center" name="search-button"
                                name="search-button">
                                <ion-icon name="search" class="text-[#808080] text-lg"></ion-icon>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="space-y-5 px-10 pb-10">
                @foreach ($kitab as $k)
                    <div>
                        <h5 class="font-bold text-slate-900 text-lg mb-3">{{ $k->name }}</h5>
                        <ul class="space-y-3">
                            <ul class="space-y-6 border-l-2 border-slate-300 ml-1">
                                @foreach ($k->bab as $bab)
                                    <li>
                                        <a href="{{ route('user.video.index', $bab->id) }}"
                                            class="block border-l-2 pl-4 -ml-[2px] text-[#810000] border-current font-semibold">{{ $bab->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <a href="" class="text-base font-bold text-white md:text-[21px] lg:text-[27px]">NGAOS KUY</a>
    @if (Auth::check())
        <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict"
            class="w-7 h-7 lg:w-8 lg:h-8 rounded-full cursor-pointer" id="toggle-navbar-profile">
    @else
        <img src="{{ asset('assets/images/user.png') }}" alt="profilePict" class="w-7 h-7 lg:w-8 lg:h-8 rounded-full"
            id="toggle-navbar-profile">
    @endif
    <div class="hidden absolute top-16 right-5 lg:right-10 z-50 bg-[#810000] w-[266px] rounded-[30px] pt-6 pb-5 px-5"
        id="navbar-profile">
        <div class="flex justify-center items-center flex-col space-y-2">
            @if (Auth::check())
                <img src="{{ asset('assets/images/kobo.jpg') }}" alt="profilePict" class="w-20 rounded-full"
                    id="toggle-navbar-profile">
                <div class="flex flex-col justify-center items-center">
                    <span class="text-base font-bold text-white">{{ session('full_name') }}</span>
                    <span class="text-base font-bold text-[#d6c3c3]/50">{{ Auth::user()->email }}</span>
                </div>
                <div class="w-full rounded-[30px] bg-[#942626] mt-3">
                    <div class="flex items-center cursor-pointer px-6 py-4 gap-3 border-b border-[#d6c3c3]/50 hover:bg-[#d6c3c3]/10 hover:rounded-t-[30px]"
                        id="setting-profile">
                        <ion-icon name="settings-outline" id="a"
                            class="text-xl font-bold text-white"></ion-icon>
                        <span class="font-bold text-white">Settings</span>
                    </div>
                    <form method="post" action="{{ route('logout') }}" id="logout-form">
                        @csrf
                        <button type="submit"
                            class="flex items-center cursor-pointer px-6 py-4 gap-3 hover:bg-[#d6c3c3]/10 hover:rounded-b-[30px] w-full">
                            <ion-icon name="log-out-outline" class="text-xl font-bold text-white"></ion-icon>
                            <span class="font-bold text-white">Logout</span>
                        </button>
                    </form>
                </div>
            @else
                <img src="{{ asset('assets/images/user.png') }}" alt="profilePict" class="w-20 rounded-full mb-5 mt-5"
                    id="toggle-navbar-profile">
                <div class="flex flex-col justify-center items-center">
                    <span class="text-base font-bold text-white">{{ session('full_name') }}</span>
                    <span class="text-base font-bold text-[#d6c3c3]/50"></span>
                </div>
                <div class="w-full rounded-[30px] bg-[#942626] mt-3">
                    <a href="{{ route("login.index") }}">
                        <div
                            class="flex items-center cursor-pointer px-6 py-4 gap-3 hover:bg-[#d6c3c3]/10 hover:rounded-[30px] w-full">
                            <ion-icon name="log-out-outline" class="text-xl font-bold text-white"></ion-icon>
                            <span class="font-bold text-white">Login</span>
                        </div>
                    </a>
                </div>
            @endif

        </div>

    </div>
</div>
<div class="w-full h-[21px] bg-[#CEA59B]"></div>
