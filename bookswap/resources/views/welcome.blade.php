@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Home</title>

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
