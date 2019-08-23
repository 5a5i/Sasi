<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,600') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body><br><br>        
<!--         @section('sidebar')
            This is the master sidebar.
        @show -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('movies.index') }}">
                    Entropia Movies
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('movies.create') }}">Add Movie</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>