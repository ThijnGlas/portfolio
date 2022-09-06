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
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-lightblue">

    <div class="w-3/4 mx-auto p-3 bg-lightblue ">
        <header>
            <h1 class="text-5xl text-white"><a href="{{route('homepage')}}">{{config('app.name')}}</a></h1>
            <h2 class="text-2xl text-white">{{$pagetitle}}</h2>
        </header>
            @include('_navigation')
        <main class="bg-white mr-3 p-2">
            {{ $slot }}
        </main>
        <footer class=" bg-white mr-3 p-2">
            <h2>Thijn Glas<br>
                +31 6 30402470<br>
                thijnglas@gmail.com<br>
            </h2>
        </footer>
    </body>
    </div>
</html>
