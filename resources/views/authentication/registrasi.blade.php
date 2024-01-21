<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngaos Kuy!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/faviconNgaosKuy.png') }}" type="image/x-icon">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div class="w-full h-screen bg-[#EEEBDD] lg:flex">
        <div class="h-screen lg:w-3/5 flex justify-center items-center">
            <form method="post" action="{{ route('login.authenticate') }}" id="login-form">
                @csrf
                <div class="flex flex-col gap-9 lg:gap-11 xl:lg:gap-14">
                    <div class="text-4xl font-medium sm:text-5xl text-right">
                        بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم
                    </div>
                    <div class="flex flex-col gap-3 lg:gap-5 xl:gap-6">
                        <div>
                            <label for="username" class="text-base font-semibold sm:text-xl">Username</label>
                            <div class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-8 sm:h-9 pl-2 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <ion-icon name="person-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                                <input type="text" name="username" id="username" placeholder="Masukkan Username"
                                    class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-sm sm:text-base">
                            </div>
                            <div class="items-center gap-1 mt-[3px] hidden" id="error-username">
                                <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                <small class="text-red-700 font-semibold sm:text-sm">Masukkan Username</small>
                            </div>
                        </div>
                        <div>
                            <label for="password" class="text-base font-semibold sm:text-xl">Password</label>
                            <div class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-8 sm:h-9 pl-2 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <ion-icon name="lock-closed-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                                <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                    class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-sm sm:text-base">
                            </div>
                            <div class="items-center gap-1 mt-[3px] hidden" id="error-password">
                                <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                <small class="text-red-700 font-semibold sm:text-sm">Masukkan Password</small>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="text-base font-semibold sm:text-xl">Email</label>
                            <div class="flex items-center gap-3 border-[1.2px] border-[#808080] rounded-[9px] sm:rounded-[12px] h-8 sm:h-9 pl-2 sm:pl-3 lg:w-[375px] xl:w-[475px]">
                                <ion-icon name="mail-outline" class="text-lg text-[#808080] sm:text-xl"></ion-icon>
                                <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                    class="w-full h-full rounded-r-[9px] sm:rounded-[12px] bg-transparent focus:border-none focus:outline-none placeholder-[#808080] font-semibold text-sm sm:text-base">
                            </div>
                            <div class="items-center gap-1 mt-[3px] hidden" id="error-email">
                                <ion-icon name="alert-circle" class="text-red-700"></ion-icon>
                                <small class="text-red-700 font-semibold sm:text-sm">Masukkan Email</small>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="h-8 sm:h-9 w-[160px] sm:w-[180px] bg-[#942626] text-base font-medium rounded-[23px] sm:rounded-[26px] text-white"
                            name="register" id="register">Register</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="h-screen lg:w-2/5 bg-[#810000] hidden lg:flex lg:flex-col lg:gap-5 justify-center items-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="login-icon" class="w-[265px] h-[265px]">
            <span class="text-4xl text-white font-bold">NGAOS KUY</span>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</body>

</html>
