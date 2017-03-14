@extends('layouts.app')

@section('content')

<html>

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Books API Example</title>
  </head>

  <body>
    <br></br>

    <div class="form-group">
      <label for="title"></label>
      <input type="text" id="title" name="title">
    </div>

    <script>
      function submitQuery(request, callback)
      {
        console.log("submitQuery called");
        $.ajax({
          method: "GET",
          url: "https://www.googleapis.com/books/v1/volumes",   //getting google api
          data: { q: "intitle:" + request.term }                //get title of book from written keyword
        })
         .done(function handleResponse(response) 
         {
            console.log("handleResponse called");

            var titles = [];
          

            for (var i = 0; i < response.items.length; i++) 
              titles.push(response.items[i].volumeInfo.title ); 

            callback(titles);
          });
        }

        $(function() 
        {
          $( "#title" ).autocomplete({
              source: submitQuery,
              minLength: 1,
              select: function( event, ui ) {

               document.getElementById("booksTitle").innerHTML = ui.item.value;
               console.log( "Selected: " + ui.item);

               $.ajax({
                  method: "GET",
                  url: "https://www.googleapis.com/books/v1/volumes",   //getting google api
                  data: { q: "intitle:" + ui.item.value }                //get title of book from written keyword
                })
              .done(function handleResponse(response) {

                  console.log("handleResponse called");
                  document.getElementById("booksAuthor").innerHTML = response.items[0].volumeInfo.authors;
                  document.getElementById("booksPublisher").innerHTML = response.items[0].volumeInfo.publisher;
                  document.getElementById("booksISBN").innerHTML = response.items[0].volumeInfo.industryIdentifiers[0].identifier;
                  document.getElementById("myImg").src = response.items[0].volumeInfo.imageLinks.smallThumbnail;
              });
            }
         });
      });

    </script>

    <br/>
    Title: <span id="booksTitle"></span> <br/>
    Author: <span id="booksAuthor"></span> <br/>
    ISBN: <span id="booksISBN"></span> <br/>
    Publisher: <span id="booksPublisher"></span> <br/>
    <img id="myImg" src="" width="107" height="98">


  </body>
</html>
@endsection
