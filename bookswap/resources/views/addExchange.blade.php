@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Sell</title>

<style>
.radio-wrapper {
    margin-left: 40px;
}
.label-class {
    margin: 10px 0 0 0;
}
</style>

@section('content')
<div class="container">
    <div class="col-sm-8 col-sm-offset-2">

        <div class="panel">
            <div class="panel-heading"><h1>Sell</h1></div>
            <div class="panel-body">
                <!-- DIFFERENT THAN PAGES login & register. code below
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }} -->
                <form method="POST" action="/addExchange">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="label-class" for="description">Description</label><br/>
                        <!-- this should use BOOTSTRAP, not margin -->
                        <div class="radio-wrapper">
                            <input type="hidden" name="bookID" value={{$news}} >
                            <input type="radio" name="desc" value="bad"> Bad
                            <input type="radio" name="desc" value="fair"> Fair
                            <input type="radio" name="desc" value="good"> Good <br/> <br/>
                            <textarea class="textarea" name="description" rows="3" cols="80" maxlength="150" id="description" placeholder="Enter description in less than 150 characters"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <!-- NOTE - changed type from text to number, less likely to break -->
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter amount only (i.e. 15.00 or 5)">
                    </div>
                    <div class="form-group btn-center">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                    @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
