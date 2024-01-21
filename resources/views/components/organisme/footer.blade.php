<div class="w-full h-2/4 bg-[#CEA59B] lg:w-full lg:h-44 flex items-center mt-auto">
    <div class="w-full flex flex-col md:flex-row pt-8 pb-9 justify-center">
        <div class="flex flex-row justify-center lg:pt-2">
            <div class="w-[120px] lg:w-full">
                <p class="text-lg lg:text-[28px] lg:pb-16 text-black font-bold">NGAOS KUY</p>
            </div>
            <div class="pl-16 lg:pl-36 w-[150px] lg:w-full">
                <p class=" text-base lg:text-lg text-black font-bold">Quick Link</p>
                <p class="pt-2 text-xs lg:text-sm text-black font-medium">Home</p>
                <p class="pt-1 text-xs lg:text-sm text-black font-medium"><a href="{{ route('about-us') }}">About Us</a></p>
                <p class="pt-1 text-xs lg:text-sm text-black font-medium"><a href="{{route('photo-gallery')}}">Photo Gallery</a></p>
            </div>
        </div>
        <div class="flex flex-row justify-center lg:pt-2 md:pt-0 pt-7 md:pl-20">
            <div class="lg:pl-24 w-[120px] lg:w-full">
                <p class="text-base lg:text-lg text-black font-bold">Address</p>
                <p class="pt-2 text-xs w-[120px] lg:w-[200px] lg:text-sm text-black font-medium">Jl. Gumuruh No.69, Gumuruh, Kec. Batununggal, Kota Bandung, Jawa Barat 40275</p>
            </div>
            <div class="pl-16 lg:pl-36 w-[150px] lg:w-full">
                <p class="text-base lg:text-lg text-black font-bold">Follow Me</p>
                <div class="flex flex-row pt-2 gap-2">
                    <img class="w-[24px] h-[24px] lg:w-[40px] lg:h-[40px]" src="{{asset('assets/images/facebook.png')}}">
                    <img class="w-[25px] h-[24px] lg:w-[40px] lg:h-[40px]" src="{{asset('assets/images/instagram.png')}}">
                    <img class="w-[24px] h-[24px] lg:w-[40px] lg:h-[40px]" src="{{asset('assets/images/youtube.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full pt-2 bg-[#810000] lg:w-full h-7 flex justify-center">
    <p class="text-xs text-white font-semibold ">@2023 Ngaoskuy</p>
</div>
