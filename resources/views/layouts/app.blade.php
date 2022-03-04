<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  SEO  --}}
    <meta name="keywords" content="@yield('meta_keywords','some default keywords')">
    <meta name="description" content="@yield('meta_description','default description')">
    <link rel="canonical" href="{{url()->current()}}"/>

    <title>{{ config('app.name') }} - @yield('title', 'Tvorba web stránok')</title>

    {{--  Styles  --}}
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
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
</body>
</html>

