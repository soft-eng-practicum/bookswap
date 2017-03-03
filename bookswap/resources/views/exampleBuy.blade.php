<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Books API Example</title>
  </head>
  <body>
    <div id="content"></div>
    <br></br>
    <div class="form-group">
      <label for="title"></label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class=form-group>
  </div>
    <script>

    var books;

    function submitQuery(request, callback)
    {
      console.log("submitQuery called");
          $.ajax({
      method: "GET",
      url: "https://www.googleapis.com/books/v1/volumes",   //getting google api
      data: { q: "intitle:" + request.term }                //get title of book from written keyword
    })
      .done(function handleResponse(response) {

        console.log("handleResponse called");
        //create new array books
        books = response;

        var titles = new Array;

      for (var i = 0; i < response.items.length; i++) {
        titles.push(response.items[i].volumeInfo.title);  //push title info into books

        // in production code, item.text should have the HTML entities escaped.
      //  document.getElementById("content").innerHTML += "<br>" + item.volumeInfo.title;
      }
       callback(titles);

      });
      //after 2 characters written potential titles of books are displayed in textbox

        }

$(function() {
     $( "#title" ).autocomplete({
         source: submitQuery,
         minLength: 2,
         select: function( event, ui ) {
           // books.items[ui.item.id].volumeInfo.title
           console.log( "Selected: " + ui.item.value);
         }
       });
     });
    </script>

  </body>
</html>
