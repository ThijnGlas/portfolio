<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Rubik:wght@300&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b4b1cc196b.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>

    <div class="w-3/4 mx-auto p-3 ">
        <header>
            <h1 class="text-5xl text-white"><a href="{{route('homepage')}}">{{config('app.name')}}</a></h1>
            <h2 class="text-2xl text-white">{{$pagetitle}}</h2>
        </header>
        <div id="navigatie">
            @include('_navigation')
        </div>
        <main class="mr-3 p-2 bg-white">
            {{ $slot }}
        </main>
        <footer id="footer" class=" bg-white mr-3 p-2">
            <div id="info">
                <h2>Thijn Glas<br></h2>
                <a href = "tel: +31630402470">+31 6 30402470</a><br>
                <a href = "mailto: thijnglas@gmail.com">thijnglas@gmail.com</a><br>
            </div>
            <div id="navigatie__footer">
                @include('_navigation')
            </div>
            <div id="socials">
                <a href="https://www.instagram.com/whoisthijn/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <i class="fa-brands fa-linkedin"></i>
            </div>
        </footer>
    </body>
    </div>
</html>
