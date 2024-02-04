@extends('layouts.index')

@section('mainContent')
    <div class="w-full h-fit bg-[#EEEBDD] content-center px-9">
        <div class="w-full">
            <div class="text-center pt-6 pb-3">
                <p class=" text-black font-bold text-xl">About Us</p>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <x-atoms.tab-button title="Ngaos Kuy" dataTab="ngaos-kuy"/>
            <x-atoms.tab-button title="Eunola" dataTab="eunola"/>
        </div>
        <div class="text-center mt-10 tab-content " id="ngaos-kuy">
            <p class="text-black font-bold mb-4">Deskripsi</p>
            <p class="text-[#808080] font-semibold mb-4">Iman, Ilmu, Bersungguh-sungguh, Maksimal, dan Konsisten. Ngaos Kuy!
            </p>
            <p class="text-black font-bold mb-4">Kontak</p>
            <p class="text-[#808080] font-semibold">No Telfon : 082317933850</p>
            <p class="text-[#808080] font-semibold">Email : ngaoskuy2020@gmail.com</p>
            <p class="text-[#808080] font-semibold">Facebook : @ngaoskuymedia</p>
            <p class="text-[#808080] font-semibold">Instagram : @ngaoskuymedia</p>
            <p class="text-[#808080] font-semibold">Youtube : @ngaoskuymedia</p>
            <p class="text-[#808080] font-semibold">Alamat : Jl. Gumuruh No.69, Gumuruh, Kec. Batununggal, Kota Bandung,
                Jawa Barat 40275</p>
        </div>
        <div class="text-center mt-10 tab-content hidden" id="eunola">
            <p class="text-black font-bold mb-4">Deskripsi</p>
            <p class="text-[#808080] font-semibold mb-4">Eunola adalah tim pembuat website ngaos kuy</p>
            <p class="text-black font-bold mb-4">Kontak</p>
            <p class="text-[#808080] font-semibold">Instagram :</p>
            <p class="text-[#808080] font-semibold">@aryarafir</p>
            <p class="text-[#808080] font-semibold">@kevinfrhnh</p>
            <p class="text-[#808080] font-semibold">@aliakbarabdillah_</p>
            <p class="text-[#808080] font-semibold">@ajizahma_</p>
            <p class="text-[#808080] font-semibold">@pashaliasa</p>
        </div>
    </div>
@endsection
