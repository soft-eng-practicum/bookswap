@extends('layouts.app')
<title>Book Swap: Reset Page</title>




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




</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
