
<style>
    @font-face{
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
    }
    .header{
        font-weight: bold; 
        text-align: center;
    }

    .slogan{
        font-style: italic; 
        text-align: center; 
    }

    .paragraph{
        font-family: 'Amiri';
        line-height: 0.7cm;
    }
</style>

<h2 class="header" >Ngaos Kuy!</h2>
<h3 class="slogan">Iman, Ilmu, Bersungguh-sungguh, Maksimal, dan Konsisten.</h3>
<hr>
<h1 class="title">{{$episode->judul->name}} | {{$episode->name}}</h1>
<p class="paragraph">
    {!! nl2br(e($episode->resume)) !!}
</p>
