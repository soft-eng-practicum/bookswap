@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Login</title>

<style>
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
input[type="text"]:focus,input[type="email"]:focus,input[type="password"]:focus,
.uneditable-input:focus {
    border: 0;
    border-bottom: 1px solid #000;
    border-radius: 0;
    outline: 0;
    box-shadow: none;
    transition: all 300ms ease-in-out;
}
.footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: .2rem;
    background-color: #efefef;
    text-align: center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
li {
    float: left;
}
li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    text-decoration: none;
}
.disabled {
    pointer-events: none;
    cursor: default;
}
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="GGC Email">
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- PAGE SECTION: Footer -->
<footer>
    Copyright &copy; 2017 <strong>BookSwap</strong>. All Rights Reserved.
</footer>
