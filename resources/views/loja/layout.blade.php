<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $loja->nome }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/bulma.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bulma-checkradio.min.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/92f1af5f84.js" crossorigin="anonymous"></script>

</head>
<body class="">

<section class="section">
    <div class="content">
        <div class="columns is-centered">
            <div class="column is-4">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>

</body>
</html>
