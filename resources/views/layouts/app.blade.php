<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Script -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    <main></main>
    </div>
    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>
</body>
</html>
