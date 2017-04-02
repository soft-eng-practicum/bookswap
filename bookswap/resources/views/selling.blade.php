
@extends('layouts.app')
<title>Book Swap: Sell Page</title>
<style>
input[type=text], select {
width: 90%;
padding: 12px 20px;
margin: 8px auto;
display: block;
border: 1px solid #ccc;

box-sizing: border-box;
}

input[type=submit] {
width: 100%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;

cursor: pointer;
}

label{
  text-align: center;
  margin: 0 auto;
  padding: 0 30px;
}
div {
  display: block;

}
.btn-center{
  text-align: center;



}
.form-group .btn-primary {
  background: #fff;
  border: 1px solid #000;
  color: #000;
  border-radius: 1px;
}
.form-group .btn-primary:hover{
  background: #000;
  color: #fff;
}

.myimage{
  display: block;
  margin: 0 auto;
  padding-bottom: 10px;
}
input[type=submit]:hover {
background-color: #45a049;
}
.form-group .form-control {
border: 0;
border-bottom: 1px solid #000;
border-radius: 0;
outline: 0;
box-shadow: none;
}
.form-group .form-control::-webkit-input-placeholder,
.form-group .form-control::-moz-input-placeholder,
.form-group .form-control:-ms-input-placeholder {
color: rgba(0, 0, 0, 0.4);
font-weight: bold;
}
textarea:focus,
input[type="text"]:focus,
.uneditable-input:focus {
border: 0;
border-bottom: 1px solid #000;
border-radius: 0;
outline: 0;
box-shadow: none;
transition: all 300ms ease-in-out;
}
.label-class {

  margin: 10px 0 0 0;
}
.panel-heading p {
  font-size:  15px;
  font-weight: bold;
  color: #696969;
  display: inline;
}
.panel-heading{
  text-align: center;

}

</style>



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
                    <p>  Sell </p>
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
                      <label class="label-class" for="title">Title</label>

                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
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
                      <input type="text" class="form-control" id="publisher" name="publisher" >
                    </div>

                    <div class="form-group">
                      <input type="hidden" class="form-control" id="img_thumbnail" name="img_thumbnail" value="uploads/blankBook.jpg">
                    </div>

                    <img id="myImg" class="myimage" src="uploads/blankBook.jpg" width="107" height="98">

                    <div class="form-group btn-center" >
                    <button type="submit" class="btn btn-primary">Continue</button>
                    <button type="reset" class="btn btn-primary" onclick="clearFunction()">Clear</button>
                  </div>

                  @include('layouts.errors')

                  </form>





        </div>
    </div>
  </div>
@endsection
