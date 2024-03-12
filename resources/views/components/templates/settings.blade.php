@extends('layouts.index')

@php
    $role = empty($roles) ? 'user' : $roles[0];
@endphp

@section('mainContent')
    <div class="w-full pt-6 pb-12 bg-[#EEEBDD] px-5">
        <div class="flex items-center gap-5">
            <a href="{{ route($role . '.home.index') }}">
                <div class="bg-[#810000] w-14 h-14 flex justify-center items-center rounded-full cursor-pointer">
                    <ion-icon name="chevron-back-outline" class="text-3xl font-bold text-white"></ion-icon>
                </div>
            </a>
            <span class="text-2xl font-bold text-black">Settings</span>
        </div>
        <form method="POST" action="{{ route('settings.store') }}" id="update-profile">
            @csrf
            <div class="md:px-9 lg:px-[76px]">
                <div class="mt-8">
                    <div class="flex-col">
                        <span class="text-xl font-bold text-black">Profile photo</span>
                        <p class="text-sm font-semibold text-black mt-1">Pick images for your account</p>
                    </div>
                    <div class="mt-4 mb-16 relative rounded-lg overflow-visible">
                        <img src="{{ asset('/assets/images/backdropProfile.jpg') }}" alt="backdrop-profile"
                            class="object-cover h-[150px] md:h-[160px] lg:h-[170px] min-w-full rounded-lg">
                        {{-- Photo by <a href="https://unsplash.com/@uniqueton?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Anton</a> on <a href="https://unsplash.com/photos/red-textile-in-close-up-photography-CtlZ68KBDIo?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a> --}}
                        <div class="absolute top-3 right-3 bg-[rgba(27,23,23,0.7)] flex items-center justify-center gap-1 px-3 py-1 rounded-2xl cursor-pointer"
                            id="select-profile" name="select-profile">
                            <ion-icon class="text-white text-lg" name="pencil"></ion-icon>
                            <span class="font-semibold text-white">Change Profile</span>
                        </div>
                        <img src="{{ asset('/assets/images/user.png') }}" alt="preview-profile"
                            class="w-[90px] h-[90px] md:w-[100px] md:h-[100px] rounded-full absolute bottom-[-45px] left-10 md:left-14 border-[5px] border-[#EEEBDD]"
                            id="preview-profile" name="preview-profile">
                        <input type="file" name="file-profile" id="file-profile" accept="image/*" hidden>
                    </div>
                    <p class="text-sm font-semibold text-black mt-2">Recommended formats jpg, jpeg and png </p>
                </div>
                <div class="mt-8">
                    <div class="flex-col">
                        <span class="text-xl font-bold text-black">About you</span>
                        <p class="text-sm font-semibold text-black mt-1">Everyone will see your name, job title and contacts
                        </p>
                    </div>
                    <div class="mt-3 flex flex-col gap-3">
                        <div class="flex flex-col gap-1">
                            <label class="text-black text-lg font-semibold" for="nama">Name</label>
                            <input
                                class="bg-transparent border border-black rounded-md w-full h-full text-lg focus:outline-none placeholder-black text-black font-semibold pl-2 py-2"
                                placeholder="Masukkan Nama" value="{{ $detail_user->name }}" type="text" name="name"
                                id="name" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-black text-lg font-semibold" for="username">Username</label>
                            <input
                                class="bg-transparent border border-black rounded-md w-full h-full text-lg focus:outline-none placeholder-black text-black font-semibold pl-2 py-2"
                                placeholder="Masukkan Username" value="{{ $user->username }}" type="text" name="username"
                                id="username" required>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-black text-lg font-semibold" for="email">Email</label>
                            <input
                                class="bg-[rgb(0,0,0,0.1)] border border-black rounded-md w-full h-full text-lg focus:outline-none placeholder-black text-black font-semibold pl-2 py-2 cursor-not-allowed"
                                placeholder="Masukkan Email" value="{{ $user->email }}" type="email" name="email"
                                id="email" readonly required>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <div class="flex-col">
                        <span class="text-xl font-bold text-black">Change Password</span>
                        <p class="text-sm font-semibold text-black mt-1">Your new password must be different to previous
                            passwords</p>
                    </div>
                    <div class="mt-3 flex flex-col gap-3">
                        <div class="hidden flex-col gap-3" id="form-change-password">
                            <div class="flex flex-col gap-1">
                                <label class="text-black text-lg font-semibold" for="new_password">New Password</label>
                                <input
                                    class="bg-transparent border border-black rounded-md w-full h-full text-lg focus:outline-none placeholder-black text-black font-semibold pl-2 py-2"
                                    placeholder="Masukkan Password" value="" type="password" name="new_password"
                                    id="new_password">
                            </div>
                            <div class="flex flex-col gap-1">
                                <label class="text-black text-lg font-semibold" for="confirm_password">Confirm
                                    Password</label>
                                <input
                                    class="bg-transparent border border-black rounded-md w-full h-full text-lg focus:outline-none placeholder-black text-black font-semibold pl-2 py-2"
                                    placeholder="Masukkan Confirm Password" value="" type="password"
                                    name="confirm_password" id="confirm_password">
                            </div>
                            <div class="items-center gap-1 mt-[2px] hidden" id="error-confirm-password">
                                <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                <small class="text-red-700 font-semibold sm:text-sm">Password yang dimasukkan tidak
                                    sesuai</small>
                            </div>
                        </div>
                        <div class="bg-[#810000] flex items-center justify-center gap-1 px-3 py-2 rounded-2xl cursor-pointer mt-3"
                            id="change-password" name="change-password">
                            <ion-icon class="text-white text-lg" name="pencil"></ion-icon>
                            <span class="font-semibold text-white text-base">Change Password</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-5 justify-center mt-12">
                    <button class="bg-[#1F7632] py-2 w-28 rounded-3xl text-white font-semibold"
                        type="submit">SAVE</button>
                </div>
            </div>
        </form>
    </div>
@endsection
