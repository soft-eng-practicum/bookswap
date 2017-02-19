
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
                      <label for="description">Description</label>
                      <input type="text" class="form-control" id="description" name="description">
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
