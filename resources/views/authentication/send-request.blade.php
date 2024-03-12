@extends('layouts.index')

@section('mainContent')
    <div class="w-full pt-6 pb-12 bg-[#EEEBDD] px-5">
        <a href="{{ route('login.index') }}" class="block w-fit">
            <div class="bg-[#810000] w-14 h-14 flex md:hidden justify-center items-center rounded-full cursor-pointer">
                <ion-icon name="chevron-back-outline" class="text-3xl font-bold text-white"></ion-icon>
            </div>
        </a>
        <form method="" action="{{ route('check-email') }}" id="send-request">
            <div class="h-[80vh] lg:h-[85vh] px-3 md:px-36 lg:px-72 xl:px-[430px] flex flex-col justify-center">
                <div class="flex flex-col gap-2 max-w-[525px]">
                    <span class="font-bold text-3xl">Reset Password</span>
                    <p class="font-semibold text-sm md:text-base">Please enter your email or username associated with your account to
                        request a password reset.</p>
                </div>
                <div class="flex flex-col gap-3 lg:gap-5 xl:gap-6 mt-6">
                    <div class="flex flex-col gap-1">
                        <label class="text-black text-lg font-semibold" for="email_reset_password">Email</label>
                        <div class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-9 pl-2 sm:pl-3 w-full">
                            <ion-icon name="mail-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                            <input type="email_reset_password" name="email_reset_password" id="email_reset_password" placeholder="Masukkan Email"
                                class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-base">
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-black text-lg font-semibold" for="username_reset_password">Username</label>
                        <div class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-9 pl-2 sm:pl-3 w-full">
                            <ion-icon name="person-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                            <input type="text" name="username_reset_password" id="username_reset_password" placeholder="Masukkan Username"
                                class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-base">
                        </div>
                    </div>
                    <div class="items-center gap-2 mt-[3px] hidden" id="error-reset-password">
                        <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                        <small class="text-red-700 font-semibold sm:text-sm">Silahkan masukkan email atau username</small>
                    </div>
                </div>
                <div class="flex justify-center mt-11 gap-6">
                    <a href="{{ route('login.index') }}" class="hidden md:block w-full max-w-[326px]">
                        <div class="h-12 text-[#810000] text-lg font-bold rounded-2xl bg-[rgba(155,69,69,0.3)] flex justify-center items-center"
                            name="reset_password" id="reset_password">Back to log in</div>
                    </a>
                    <button type="submit"
                        class="w-full max-w-[326px] h-12 bg-[#810000] text-lg font-semibold rounded-2xl text-white"
                        name="reset_password" id="reset_password">Send Request</button>
                </div>
            </div>
        </form>
    </div>
@endsection
