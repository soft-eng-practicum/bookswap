@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Login</title>

@section('content')
<!-- change to header.. -->
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

            <div class="panel">
                <div class="panel-heading"><h1>Login</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 control-label">E-Mail Address</label>
                            <div class="col-sm-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="GGC Email">
                                @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>&nbsp;Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn">Login</button>
                                <!-- NOTE - password.request goes to reset.blade.php -->
                                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
