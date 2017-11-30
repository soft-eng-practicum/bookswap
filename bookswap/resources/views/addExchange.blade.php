@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Sell</title>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="panel">
                <div class="panel-heading"><h1>Sell</h1></div>
                <div class="panel-body">
                    <!-- DIFFERENT THAN PAGES login & register. code below
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }} -->
                    <form class="form-horizontal" role="form" method="POST" action="/addExchange">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="description" class="col-sm-4 control-label">Description</label><br/>
                            <!-- this should use BOOTSTRAP, not margin -->
                            <div class="col-sm-6">
                                <input type="hidden" name="bookID" value={{$news}} >
                                <input type="radio" name="desc" value="bad" class="radio"> Bad
                                <input type="radio" name="desc" value="fair" class="radio"> Fair
                                <input type="radio" name="desc" value="good" class="radio"> Good <br/> <br/>
                                <textarea class="textarea" name="description" rows="3" cols="80" maxlength="150" id="description" placeholder="Enter description in less than 150 characters"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-sm-4 control-label">Price</label>
                            <!-- NOTE - changed type from text to number, less likely to break -->
                            $<input type="number" class="form-control" id="price" name="price" placeholder="Enter amount only, no '$' (i.e. 15.00 or 15)">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </div>
                        @include('layouts.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
