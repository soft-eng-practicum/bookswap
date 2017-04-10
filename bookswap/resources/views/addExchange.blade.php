
@extends('layouts.app')

<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

<style>
input[type=text], select {
width: 90%;
padding: 12px 20px;
margin: 8px auto;
display: block;
border: 1px solid #ccc;

box-sizing: border-box;
}

.textarea{
  margin: 0 0px;

}
input[type=submit] {
width: 100%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;

cursor: pointer;
}
.radio-wrapper {
  margin-left: 40px;
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

.form-group .form-control,
textarea {
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
input[type="text"]:focus,
input[type="number"]:focus,
.uneditable-input:focus {
border: 0;
border-bottom: 1px solid #000;
border-radius: 0;
outline: 0;
box-shadow: none;
transition: all 300ms ease-in-out;
}
.label-class {

  margin: 10px 0 0 0;
}
.panel-heading p {
  font-size:  15px;
  font-weight: bold;
  color: #696969;
  display: inline;
}
.panel-heading{
  text-align: center;

}
input[type=number] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px auto;
  display: block;
  border: 1px solid #ccc;


}
</style>

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

              <div class="panel panel-default">
                  <div class="panel-heading">
                    <p>  Sell </p>
                  </div>

                  <form method = "POST" action = "/addExchange">
                    {{ csrf_field() }}

                    <div class="form-group">

                      <label class="label-class" for="description">Description</label> <br/>
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
                      <input type="text" class="form-control" id="price" name="price" placeholder="Enter integer only">
                    </div>

                    <div class="form-group btn-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                  @include('layouts.errors')

                  </form>


        </div>
    </div>
  </div>
@endsection
