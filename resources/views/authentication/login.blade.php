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
    <div class="w-full h-screen bg-[#EEEBDD]">
        <div class="">
            <form method="" action="" id="form">
                @csrf
                <div class="group-form">
                    <div class="group-input">
                        <label for="username">Username</label>
                    </div>
                    <div class="group-input">
                        
                    </div>
                    <button type="submit" class="btn-login" name="login" id="login">Log In</button>
                </div>
            </form>
        </div>
        <div class=""></div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</body>

</html>
