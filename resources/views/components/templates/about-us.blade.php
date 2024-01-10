@extends('layouts.index')

@section("mainContent")

<div class="w-full h-screen bg-[#EEEBDD] content-center px-9">
    <div class="w-full">
        <div class="text-center pt-6 pb-3">
            <p class=" text-black font-bold text-xl">About Us</p>
        </div>
    </div>
    {{-- jadi kalo di html kan class nya tu pake nama sedangkan ini engga, cara manggil nya gmn? pake id? --}}
    <div class="w-full flex justify-center">
        <button
            class="mt-4 h-9 w-40 mr-4 rounded-full text-base font-medium text-white bg-[#942626]">Ngaos Kuy</button>
        <button
            class="mt-4 h-9 w-40 rounded-full text-base font-medium text-white bg-[#942626]">Eunola</button>
    </div>
    {{-- ngaos kuy --}}
    {{-- kalo di html disini juga class nya sebagai nama nah kalau di tailwind gmn --}}
    <div class="text-center mt-10">
        <p class="text-black font-bold mb-4">Kontak</p>
        <p class="text-[#808080] font-semibold">No Telfon : 082317933850</p>
        <p class="text-[#808080] font-semibold">Email : ngaoskuy2020@gmail.com</p>
        <p class="text-[#808080] font-semibold">Facebook : @ngaoskuymedia</p>
        <p class="text-[#808080] font-semibold">Instagram : @ngaoskuymedia</p>
        <p class="text-[#808080] font-semibold">Youtube : @ngaoskuymedia</p>
        <p class="text-[#808080] font-semibold">Alamat : Jl. Gumuruh No.69, Gumuruh, Kec. Batununggal, Kota Bandung, Jawa Barat 40275</p>
    </div>
    {{-- eunola --}}
    <div class="text-center mt-10">
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all tab buttons
            const tabButtons = document.querySelectorAll('[data-tab]');

            // Get all tab content elements
            const tabContents = document.querySelectorAll('.tab-content');

            // Add click event listener to each tab button
            tabButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const tabId = this.dataset.tab;

                    // Hide all tab content elements
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Show the selected tab content
                    document.getElementById(tabId).classList.remove('hidden');
                });
            });
        });
    </script>
</div>
@endsection
