<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BasicWebsite') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('inc.navbar')

        <div class="container">
          @if(Request::is('/') || Request::is('welcome'))
            @include('inc.showcase')
          @endif
            <div class="row">
                <div class="col-md-8">
                  @include('inc.messages')
                  @yield('content')
                </div>
                <div class="col-md-4">
                  @include('inc.sidebar')
                </div>
            </div>
        </div>

        <footer id="footer" class="text-center">
          <p>Copyright 2019 &copy; BasicWebsite</p>
        </footer>


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
