
@extends('layouts.app')

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
                      <input type="hidden" name="bookID" value={{$news}} >
                      <input type="radio" name="desc" value="bad"> Bad
                      <input type="radio" name="desc" value="fair"> Fair
                      <input type="radio" name="desc" value="good"> Good <br/> <br/>
                      <textarea name="description" rows="3" cols="80" id="description" placeholder="Description.."></textarea>
                      
                    </div>

                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class=form-group>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                  @include('layouts.errors')

                  </form>


        </div>
    </div>
  </div>
@endsection
