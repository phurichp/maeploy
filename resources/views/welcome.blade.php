<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maeploy</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" href="{{ asset('css/font-awesome/fontawesome-all.css') }}"> -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > span a  {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @media screen and (max-width: 768px) {

                .links > span {

                    display: block;

                }

                .content div.title {

                    font-size : 56px;

                }

            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="color: palevioletred;">
                    Mae ~ pl <i class="fas fa-tape fa-xs"></i>y
                </div>

                <p style="text-align: center; padding-bottom: 20px; font-size: 18px;"> Unlock your creativity</p>
                <div class="links">
                    <span><a href="https://laravel.com/docs">Our store</a></span>
                    <span><a href="https://laracasts.com">How it works</a></span>
                    <span><a href="https://laravel-news.com">Our partners</a></span>
                    <span><a href="https://forge.laravel.com">Developer Story</a></span>
                    <span><a href="https://github.com/phurichp/maeploy">GitHub</a></span>
                </div>
            </div>

                <p style="text-align: center; padding-bottom: 20px; font-size: 12px; position: absolute; bottom: 0;"> &#169; Maeploy Coperation - Pre-alpha release </p>

        </div>
    </body>

    {{--<footer>--}}

        {{--<p style="text-align: center; padding-bottom: 20px; font-size: 12px;"> &#169; Maeploy Coperation - Pre-alpha release </p>--}}

    {{--</footer>--}}
</html>
