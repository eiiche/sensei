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

        <link rel="stylesheet" href="path/to/swiper.css"/>
        <script type="text/javascript" src="path/to/swiper.js"></script>
        <script type="text/javascript" src="path/to/vue.min.js"></script>
        <script type="text/javascript" src="path/to/dist/vue-awesome-swiper.js"></script>
        <script type="text/javascript">
            Vue.use(window.VueAwesomeSwiper)
        </script>
    </head>
    <body>
        <div id="app"></div>
        <script>
            window.currentUser = @json(Auth::user());
        </script>
    </body>
</html>
