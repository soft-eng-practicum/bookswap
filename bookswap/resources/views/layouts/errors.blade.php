@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Error Page</title>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

            <div class="panel">
                <div class="panel-heading"><h1>Something Went Wrong</h1></div>
                <div class="panel-body">
                    @if(count($errors))
                    <div class="form=group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
