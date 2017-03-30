<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Swap: Main Page</title>

        <!-- Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script
          src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
          integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
          crossorigin="anonymous"></script>
        <script>
          window.Laravel = {!! json_encode([
              'csrfToken' => csrf_token(),
          ]) !!};
        </script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            input[type=textz] {
              width: 800px;
              box-sizing: border-box;
              border: 2px solid #ccc;
              border-radius: 4px;
              font-size: 16px;
              background-color: white;
              background-image: url('searchicon.png');
              background-position: 10px 10px;
              background-repeat: no-repeat;
              padding: 12px 20px 12px 40px;
              -webkit-transition: width 0.4s ease-in-out;
              transition: width 0.4s ease-in-out;
              }
              input[type=text] {
                font-weight: bold;
                text-transform: capitalize;
              }

            html, body {
                background-color: #FFFFFF;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .form-control {
         border: 0;
            border-bottom: 3px solid #403737;
            border-radius: 0;
            outline: 0;
            box-shadow: none;
            }
            .form-control::-webkit-input-placeholder,
            .form-control::-moz-input-placeholder,
            .form-control:-ms-input-placeholder {
         color: rgba(0, 0, 0, 0.8);
            font-weight: bold;
            }
            textarea:focus,
            input[type="text"]:focus,
            .uneditable-input:focus {
         border: 0;
            border-bottom: 3px solid #403737;
            border-radius: 0;
            outline: 0;
            box-shadow: none;
            transition: all 300ms ease-in-out;
            }

         ::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 1.0);
            font-weight: bold;
          }
        </style>
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())

                        <a href="{{ url('/test') }}">Explore</a>
                        <a href="{{ url('/selling') }}">Sell</a>
                        <a href="{{ url('/about') }}">About us</a>
                        <a href="{{ url('/faq') }}">FAQ</a>

                        <a href="{{ url('/profile') }}"> {{ Auth::user()->name }}  </a>


                    @else
                        <a href="{{ url('/test') }}">Explore</a>
                        <a href="{{ url('/about') }}">About Us</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                        <a href="{{ url('/faq') }}">FAQ</a>
                    @endif
                </div>
            @endif

            <div class="content">
              <div class="title m-b-md">
                  <img src="{{URL::asset('img/BookSwapLogo.jpg')}}" alt="" style="width:500px;height:375px;"/>
                  <input type="text" class="form-control" id="search" name="search" placeholder="Search book..">
              </div>
            </div>
        </div>
    </body>
</html>
