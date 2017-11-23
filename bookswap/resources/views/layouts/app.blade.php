<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- verify viewing device's width for proper display -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- TOKEN: used in Laravel script below for site security -->
    <!-- NOTE - this was not included in the welcome page, just the script below -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- IMPORT: Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <!-- IMPORT: Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abel|Cinzel+Decorative|Cinzel+Decorative:bold|Cinzel+Decorative:700">
    <!-- IMPORT: Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- PAGE: Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CODE: scripts, etc -->
    <script>
    // CODE: JS: token (used by all pages)
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};

    // CODE: JS: for the navbar's stacked appearance in small screens (used by all pages)-->
    function checkWidth(init)
    {
        // If browser resized, check width again
        if ($(window).width() < 768){
            $('#main-nav').addClass('nav-stacked');
            console.log($(window).width());
        } else if ($(window).width() > 768){
            if (!init) {
                $('#main-nav').removeClass('nav-stacked');
                console.log($(window).width());
            }
        }
    }
    $(document).ready(function() {
        checkWidth(true);

        $(window).resize(function() {
            checkWidth(false);
        });
    });

    // CODE: JS: for search functionality (used only by welcome page) -->
    var books;

    function submitQuery(request, callback)
    {
        //console.log("submitQuery called");
        $.ajax({
            method: "GET",
            url: "/listexchangeJSON",   //getting JSON
            data: { title: request.term }
            //get title of book from written keyword
        })
        .done(function handleResponse(response) {
            console.log("handleResponse called: " + response);
            //create new array books
            books = response;
            var titles = new Array;

            for (var i = 0; i < response.length; i++) {
                titles.push(response[i].title);  //push title info into books
                // in production code, item.text should have the HTML entities escaped.
                //document.getElementById("content").innerHTML += "<br>" + item.volumeInfo.title;
            }

            callback(titles);
            //console.log(titles);
        });
        //after 2 characters written potential titles of books are displayed in textbox
    }

    $(function() {
        $('#search').autocomplete({
            source: submitQuery,
            minLength: 2,
            select: function( event, ui ) {
                //books.items[ui.item.id].volumeInfo.title
                //console.log( "Selected: " +  ui.item.value);
                window.location.href = '/test?title=' + ui.item.value;
            },
        });
        // enter keypress
        $('#search').keypress(function (e) {
            if (e.which == 13) {
                //console.log("enter keypress" +  $('#search')[0].value );
                window.location.href = '/test?title=' + $('#search')[0].value;
            }
        });
    });
    </script>
    <!--<script src="/js/app.js"></script>-->
</head>
<body>
    <div id="app">
        <!-- PAGE: NAVBAR -->
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="container">

                <!-- NAVBAR: Header -->
                <div class="navbar-header">
                    <!-- NAVBAR: Header - Toggle Button [handles opening navbar components on small and mobile screens]-->
                    <!-- NOTE - id #navbarCollapsed used for target handling -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <!-- ICON: from google. a hamburger menu icon -->
                        <span class="sr-only">Toggle navigation</span>
                        <i class="material-icons md-light">menu</i>
                    </button>
                    <!-- NAVBAR: Header - Branding (using "bookswap" may change to logo) -->
                    <a class="navbar-brand" href="{{ url('/') }}">BOOK<span>SWAP</span></a>
                </div>

                <!-- NAVBAR: HAMBURGER (Expanded) -->
                <!-- NOTE - id #navbarCollapsed used for target handling from the menu/hamburger button -->
                <div class="navbar-collapse collapse" id="navbarCollapse" aria-expanded="false">
                    <!-- Right Side Of Navbar -->
                    <!-- NOTE - id #main-nav used for toggling the stacked navbar look on small device views. Used in script above
                                GO TO ..\routes\web.php. fix issue with 'route' vs 'url' checkout site below for help
                                https://laravel.io/forum/06-29-2014-how-to-link-to-route-when-route-is-defined-in-a-controller -->
                    <ul class="nav navbar-nav navbar-right" id="main-nav">
                        <li><a href="{{ url('test') }}">Search</a></li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a href="{{ url('/selling') }}">Sell</a></li>
                        <!-- link with dropdown menu options -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <!-- NOTE - class .main-nav used for toggling the stacked navbar look on small device views. Used in script above -->
                            <ul class="dropdown-menu" id="main-nav" role="menu">
                                <li><a href="{{ url('/profile') }}" class="dropdown-item">Profile</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <!-- ICON: from google. a locked lock icon -->
                                        <i class="material-icons md-light">lock_outline</i>
                                        " Logout"
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


    <!-- PAGE SECTION: Footer -->
    <footer class="container">
        Copyright &copy; 2017 <strong>BookSwap</strong>. All Rights Reserved.
    </footer>
</div>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
    crossorigin="anonymous"></script>
</body>
</html>
