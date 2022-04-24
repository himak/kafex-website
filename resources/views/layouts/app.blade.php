<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-50619940-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-50619940-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  SEO  --}}
    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">
    {{-- <link rel="canonical" href="{{url()->current()}}"/> --}}
    <link rel="canonical" href="{{ url('/') }}"/>

    <title>{{ config('app.name') }} - @yield('title', 'Tvorba web stránok')</title>

    {{--  Styles  --}}
    <link href="{{ asset( mix('/css/app.css') ) }}" rel="stylesheet">

    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> --}}

    {{--  Favicon  --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

    <header class="navigation">
        <div class="container">
            <h1 class="logo">{{ __('KAFEX') }}</h1>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ url('/#o-nas') }}" class="nav-link">{{ __('O nás') }}</a></li>
                    <li class="nav-item"><a href="{{ url('/#sluzby') }}" class="nav-link">{{ __('Služby') }}</a></li>
                    <li class="nav-item"><a href="{{ url('/#projekty') }}" class="nav-link">{{ __('Projekty') }}</a></li>
                    <li class="nav-item"><a href="{{ url('/#kontakt') }}" class="nav-link btn">{{ __('Kontakt') }}</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <p><a href="{{ url('/') }}">&copy; Copyright  {{ now()->year }} KAFEX - Všetky práva vyhradené</a></p>
    </footer>

    {{-- <script src="{{ asset( mix('/js/app.js') ) }}"></script> --}}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>
</html>

