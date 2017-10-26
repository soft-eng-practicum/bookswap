<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TOKEN: used in Laravel script below for site security -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- IMPORT: image (bookswap logo)
    NOTE: unused... remove.
    NOTE: make book logo to return to home page -->
    <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

    <!-- IMPORT: Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abel|Cinzel+Decorative|Cinzel+Decorative:bold|Cinzel+Decorative:700">

    <!-- PAGE: Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CODE: Laravel (token) -->
    <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <!-- PAGE: NAVBAR -->
        <nav class="navbar navbar-static-top">
            <div class="container">

                <!-- NAVBAR: Header -->
                <div>

                    <!-- NAVBAR: HAMBURGER (Collapsed) -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- NAVBAR: Header (Branding Image) -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        BookSwap
                    </a>
                </div>

                <!-- NAVBAR: HAMBURGER (Expanded) -->
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar
                    NOTE: looks like a nbsp over the expanded menu optoions... fail! -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <!-- TODO fix this navbar!! use the code from the welcome page below
                        NOTE: code to determine title... <title>{{ config('app.name', 'Laravel') }}</title>
                        perhaps use to confirm current link.
                        NOTE: welcome: <a></a>.     below: <ul><li><a></a></li></ul>     why???

                        @if (Route::has('login'))
                        <div class="links">
                        <a href="{{ url('/welcome') }}"><span id="currentlink">Home</span></a>
                        <a href="{{ url('/test') }}">Search</a>
                        <a href="{{ url('/about') }}">About</a>
                        <a href="{{ url('/faq') }}">FAQ</a>

                        @if (Auth::check())
                        <a href="{{ url('/selling') }}">Sell</a>
                        <a href="{{ url('/profile') }}">{{ Auth::user()->name }}</a>

                        @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        @endif
                        </div>
                        @endif
                        -->
                        <li><a href="{{ url('/welcome') }}">Home</a></li>
                        <li><a href="{{ url('/test') }}">Search</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/faq') }}">FAQ</a></li>

                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>

                        @else
                        <li><a href="{{ url('/selling') }}">Sell</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/profile') }}">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>

                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
        <!-- PAGE: CONTINUE... (TO ACTUAL PAGE FILES) begins prespective pages... -->

<!-- PAGE: PICK UP... (FROM ACTUAL PAGE FILES) ends prespective pages... -->
@yield('content')
</div>

<!-- PAGE SECTION: Footer -->
<footer class="container">
    Copyright &copy; 2017 <strong>BookSwap</strong>. All Rights Reserved.
</footer>

<!-- Scripts -->
<script src="/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
</body>
</html>
