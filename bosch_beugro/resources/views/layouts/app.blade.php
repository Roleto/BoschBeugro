<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('resources/js/custom.js') }}"></script>
        <!-- Styles -->
        <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Beugro</title>
    </head>
    <body>
        <div id="app">
        @include('layouts.nav')
            <main class="py-4 main">
                @yield('content')
            </main>
        </div>
    </body>
</html>