
@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

              <div class="panel panel-default">
                  <div class="panel-heading">
                      Sell
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

               document.getElementById("title").innerHTML = ui.item.value;
               console.log( "Selected: " + ui.item.value);

               $.ajax({
                  method: "GET",
                  url: "https://www.googleapis.com/books/v1/volumes",   //getting google api
                  data: { q: "intitle:" + ui.item.value }                //get title of book from written keyword
                })
              .done(function handleResponse(response) {

                  console.log("handleResponse called");
                  console.log( "author: " + document.getElementById("author").innerHTML);
                  document.getElementById("author").value = response.items[0].volumeInfo.authors;
                  document.getElementById("publisher").value = response.items[0].volumeInfo.publisher;
                  document.getElementById("ISBN").value = response.items[0].volumeInfo.industryIdentifiers[0].identifier;
                  document.getElementById("myImg").src = response.items[0].volumeInfo.imageLinks.smallThumbnail;
                  document.getElementById("img_thumbnail").value = response.items[0].volumeInfo.imageLinks.smallThumbnail;

              });
            }
         });
      });
        function clearFunction() {
          document.getElementById("myImg").src = "uploads/blankBook.jpg";
        }
    </script>
                  <form method = "POST" action = "/viewBooks">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                      <label for="author">Author</label>
                      <input type="text" class="form-control" id="author" name="author">
                    </div>

                    <div class="form-group">
                      <label for="ISBN">ISBN</label>
                      <input type="text" class="form-control" id="ISBN" name="ISBN">
                    </div>

                    <div class="form-group">
                      <label for="publisher">Publisher</label>
                      <input type="text" class="form-control" id="publisher" name="publisher">
                    </div>

                    <div class="form-group">
                      <input type="hidden" class="form-control" id="img_thumbnail" name="img_thumbnail" value="uploads/blankBook.jpg">
                    </div>

                    <div class=form-group>
                    <button type="submit" class="btn btn-primary">Continue</button>
                    <button type="reset" class="btn btn-primary" onclick="clearFunction()">Clear</button>
                  </div>

                  @include('layouts.errors')

                  </form>

                  <img id="myImg" src="uploads/blankBook.jpg" width="107" height="98">
  

        </div>
    </div>
  </div>
@endsection
