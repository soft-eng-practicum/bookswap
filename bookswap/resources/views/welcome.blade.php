<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- IMPORT: image (bookswap logo)
    NOTE: unused... remove.
    NOTE: make book logo to return to home page -->
    <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

    <!-- IMPORT: Stylesheets -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- TODO REMOVE PREVIOUS FONT & move fonts to the css/app.css file
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abel|Cinzel+Decorative|Cinzel+Decorative:bold|Cinzel+Decorative:700">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- PAGE: Title -->
    <title>BookSwap | Home</title>

    <!-- IMPORT: jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

    <!-- CODE: Laravel (token) -->
    <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
    </script>

    <!-- CSS: Styles (believed to be a copy/paste of all styles for all pages) -->
    <style>
    html, body {
        background-color: #333333;
        color: #CCCCCC;
        font-family: 'Abel', sans-serif;
        width: 95%;
        margin: auto;
        min-witdh: 800px;
        /* NOTE: box floats/aligns to top without all of the below...
        Moved from random classes to main & header, now only position remains*/
        height: 100vh;
        align-items: center;
        /* possible reason */
        display: flex;
        justify-content: center;
    }
    header, footer {
        position: absolute;
        padding: .2rem;
        padding: 10px 10px;
    }
    header {
        font-size: 1.2em;
        float: right;
        top: 0;
        right: 0;
        position: top;
    }
    footer {
        font-size: .8em;
        bottom: 0;
        left: 0;
        position: bottom;
    }
    main {
        text-align: center;
        position: relative;
    }
    .links a {
        color: #666666;
        padding: 0 20px;
        font-size: 1.2em;
        text-decoration: none;
        text-transform: uppercase;
    }
    .links a:hover {
        color: #AAFF00;
        text-decoration: none;
    }
    #currentlink {
        color: #AAFF00;
    }
    #logo-img {
        width: 400px;
    }
    #logo-name {
        padding-top: 15px;
        padding-bottom: 30px;
        font-size: 6em;
        color: #77BB00;
    }
    #logo-name > span {
        font-weight: 700;
        font-family: 'Cinzel Decorative', cursive;
    }
    .form-control {
        padding-top: 45px;
        background-color: #333;
        border: 0;
        border-bottom: 3px solid #ccc;
        outline: 0;
        box-shadow: none;
        font-weight: bold;
    }
    input[type=text] {
        font-size: 1.2em;
        font-weight: bold;
        text-transform: capitalize;
    }
    textarea:focus, input[type="text"]:focus, .uneditable-input:focus {
        border: 0;
        border-bottom: 3px solid #403737;
        border-radius: 0;
        outline: 0;
        box-shadow: none;
        transition: all 300ms ease-in-out;
    }
    </style>

    <!-- CODE: JS (search functionality)-->
    <script>
    var books;

    function submitQuery(request, callback)
    {
        console.log("submitQuery called");
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
                //  document.getElementById("content").innerHTML += "<br>" + item.volumeInfo.title;
            }

            callback(titles);
            console.log(titles);
        });
        //after 2 characters written potential titles of books are displayed in textbox
    }

    $(function() {
        $( "#search" ).autocomplete({
            source: submitQuery,
            minLength: 2,
            select: function( event, ui ) {
                // books.items[ui.item.id].volumeInfo.title
                console.log( "Selected: " +  ui.item.value);
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
    <!-- PAGE SECTION: Header -->
    <header>
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
    </header>

    <!-- PAGE SECTION: Main -->
    <main>
        <!-- MAIN SECTION: Logo -->
            <img id="logo-img" src="{{URL::asset('img/logo.png')}}" alt="BookSwap logo. A green book."/><br>
            <!-- <span class="title-book"> changes to Abel> -->
            <div id="logo-name">BOOK<span>SWAP</span>
            </div>
        <!-- MAIN SECTION: Search field -->
        <div>
            <input type="text" class="form-control" id="search" name="search" placeholder="Search book..">
        </div>
    </main>

    <!-- PAGE SECTION: Footer -->
    <footer>
        Copyright &copy; 2017 <strong>BookSwap</strong>. All Rights Reserved.
    </footer>
</body>
</html>
