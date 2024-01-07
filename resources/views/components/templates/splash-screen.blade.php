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
        <div class="h-screen w-3/5 hidden lg:flex lg:flex-col">
        </div>
        <div class="lg:w-2/5 w-full h-screen flex flex-col justify-center items-center bg-[#810000]">
            <img class="object-cover h-48 w-48 lg:w-[256px] lg:h-[256px]" src="{{ asset('assets/images/icon.png') }}">
            <div class="mt-3 text-4xl font-bold text-white">NGAOS KUY</div>
            <div class="pt-6 flex flex-col w-40">
                <button
                    class="mt-10 h-8 w-160 lg:h-[33px] lg:w-[180px] rounded-full text-base font-medium text-white bg-[#942626]"
                    id="masuk-splashscreen">Masuk</button>
                <button
                    class="mt-5 h-8 w-160 lg:h-[33px] lg:w-[180px] rounded-full text-base font-medium text-white bg-[#942626]"
                    id="login-splashscreen">Login</button>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</body>

</html>
