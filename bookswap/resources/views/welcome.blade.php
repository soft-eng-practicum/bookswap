@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Home</title>
<script>
/*
CODE: JS: for 'search book' functionality (used only by welcome page)
NOTE - was moved to app.blade.php, but functionality lost... returned here.
    Also, this code refers to the /selling (sell) page js code for book searching
*/
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
@section('content')
<div class="container">
    <img class="logo-img" src="{{URL::asset('img/logo.png')}}" alt="BookSwap logo. A green book."/>

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="panel">
                <div class="panel-header">
                    <!-- <span class="title-book"> changes to Abel> -->
                    <div class="logo-name logo-big">BOOK<span>SWAP</span></div>
                </div>
                <div class="panel-body">
                    <div class="col-sm-10 col-sm-offset-1 title">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search book...">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
