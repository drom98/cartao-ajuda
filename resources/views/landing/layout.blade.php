<!DOCTYPE html>
<html lang="en">
    <head>
        @include('landing.includes.seo')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cartão Ajuda') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bulma-steps.min.css') }}" rel="stylesheet">

        <script src="https://kit.fontawesome.com/92f1af5f84.js" crossorigin="anonymous"></script>

        <script src="{{ asset('js/matomo.js') }}"></script>
    </head>
<body class="has-navbar-fixex-top">
    @yield('content')
</body>
</html>
