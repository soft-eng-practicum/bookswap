
@extends('layouts.app')
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
.btn-primary {
  background: #ABC2C9;
}
.myimage{
  display: block;
  margin: 0 auto;
  padding-bottom: 10px;
}
input[type=submit]:hover {
background-color: #45a049;
}




</style>

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

              <div class="panel panel-default">
                  <div class="panel-heading">
                      Sell
                  </div>

                  <form method = "POST" action = "/addExchange">
                    {{ csrf_field() }}

                    <div class="form-group">

                      <label for="description">Description</label> <br/>
                      <div class="radio-wrapper">
                          <input type="hidden" name="bookID" value={{$news}} >
                          <input type="radio" name="desc" value="bad"> Bad
                          <input type="radio" name="desc" value="fair"> Fair
                          <input type="radio" name="desc" value="good"> Good <br/> <br/>
                          <textarea class="textarea" name="description" rows="3" cols="80" id="description" placeholder="Description.."></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" id="price" name="price">
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
