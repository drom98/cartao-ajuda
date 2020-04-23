<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('landing.includes.seo')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cartão Ajuda') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/92f1af5f84.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/matomo.js') }}"></script>
</head>
<body class="has-navbar-fixed-top">
    @include('frontend.includes.navbar')
    <section class="section">
        @yield('content')
    </section>

    @include('frontend.includes.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    @stack('scriptAdicionarMetodoPagamento')
</body>
</html>
