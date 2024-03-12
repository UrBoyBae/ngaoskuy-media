@extends('layouts.index')

@section('mainContent')
    <div class="w-full pt-6 pb-12 bg-[#EEEBDD] px-5">
        <form method="" action="" id="reset-password">
            <div class="h-[80vh] lg:h-[85vh] px-3 md:px-36 lg:px-72 xl:px-[430px] flex flex-col justify-center">
                <div class="flex flex-col gap-2 max-w-[525px]">
                    <span class="font-bold text-3xl">Set your new password</span>
                    <p class="font-semibold text-sm md:text-base">Your new password should be different from passwords
                        previously used</p>
                </div>
                <div class="flex flex-col gap-3 lg:gap-5 xl:gap-6 mt-6">
                    <div class="flex flex-col gap-1">
                        <label class="text-black text-lg font-semibold" for="new_password">New Password</label>
                        <div
                            class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-9 pl-2 sm:pl-3 w-full">
                            <ion-icon name="lock-closed-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                            <input type="password" name="new_password" id="new_password"
                                placeholder="Masukkan Password Baru"
                                class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-base">
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label class="text-black text-lg font-semibold" for="confirm_password">Confirm Password</label>
                        <div
                            class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-9 pl-2 sm:pl-3 w-full">
                            <ion-icon name="lock-closed-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                            <input type="password" name="confirm_password" id="confirm_password"
                                placeholder="Masukkan Confirm Password"
                                class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-base">
                        </div>
                        <div class="items-center gap-1 mt-[2px] hidden" id="error-confirm-password">
                            <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                            <small class="text-red-700 font-semibold sm:text-sm">Password yang dimasukkan tidak
                                sesuai</small>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-11 gap-6">
                    <button type="submit"
                        class="w-full max-w-[326px] h-12 bg-[#810000] flex items-center justify-center gap-1 px-3 py-2 rounded-2xl cursor-not-allowed mt-3"
                        id="reset_password" name="reset_password" disabled>
                        <ion-icon class="text-white text-lg" name="pencil"></ion-icon>
                        <span class="text-lg font-semibold text-white">Reset Password</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
