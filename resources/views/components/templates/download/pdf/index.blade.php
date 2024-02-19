<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        /* @font-face{
            font-family: 'Amiri';
            src: url({{ storage_path("fonts/amiri/Amiri-Regular.ttf") }}) format("truetype");
            font-weight: 400;
            font-style: normal;
        }
        @font-face{
            font-family: 'Amiri';
            src: url({{ storage_path("fonts/amiri/Amiri-Italic.ttf") }}) format("truetype");
            font-weight: 400;
            font-style: italic;
        }
        @font-face{
            font-family: 'Amiri';
            src: url({{ storage_path("fonts/amiri/Amiri-Bold.ttf") }}) format("truetype");
            font-weight: 700;
            font-style: bold;
        }
        @font-face{
            font-family: 'Amiri';
            src: url({{ storage_path("fonts/amiri/Amiri-BoldItalic.ttf") }}) format("truetype");
            font-weight: 400;
            font-style: bold-italic;
        } */
        .header{
            font-weight: bold; 
            text-align: center;
        }
    
        .slogan{
            font-style: italic; 
            text-align: center; 
        }
    
        .paragraph{
            font-family: "Amiri", serif;
            line-height: 0.7cm;
        }

        .amiri-regular {
            font-family: "Amiri", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    
    
</head>
<body>
    <h2 class="header" >Ngaos Kuy!</h2>
    <h3 class="slogan">Iman, Ilmu, Bersungguh-sungguh, Maksimal, dan Konsisten.</h3>
    <hr>
    <h1 class="title">{{$episode->judul->name}} | {{$episode->name}}</h1>
    <p class="paragraph amiri-regular">
    {{-- {{$episode->resume}} --}}
        {!! nl2br(e($episode->resume)) !!}
        
    </p>    
</body>
</html>

