<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!--slick読み込み-->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/sensei.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}" defer></script>


        <!--slick用jqueryとjs-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
    </head>
    <script>
        $(function(){
            $('.slide').slick({
                //スライド数など変更
                arrows:true,
                dots:true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
    </script>
    <body>
        <div id="app"></div>
        <script>
            window.currentUser = @json(Auth::user());
        </script>
    </body>
</html>
