@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel">
                <div class="panel-heading"><h1>Registration Confirmed</h1></div>
                <div class="panel-body">
                    Your Email has been successfully verified. <a href="{{url('/login')}}">Click to login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
