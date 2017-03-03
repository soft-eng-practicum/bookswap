
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

              <div class="panel panel-default">
                  <div class="panel-heading">
                      Sell
                  </div>


                  <form method = "POST" action = "/viewBooks">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                      <label for="author">Author</label>
                      <input type="text" class="form-control" id="author" name="author">
                    </div>

                    <div class="form-group">
                      <label for="edition">Edition</label>
                      <input type="text" class="form-control" id="edition" name="edition">
                    </div>

                    <div class="form-group">
                      <label for="ISBN">ISBN</label>
                      <input type="text" class="form-control" id="ISBN" name="ISBN">
                    </div>

                    <div class="form-group">
                      <label for="publisher">Publisher</label>
                      <input type="text" class="form-control" id="publisher" name="publisher">
                    </div>

                    <div class=form-group>
                    <button type="submit" class="btn btn-primary">Continue</button>
                  </div>

                  @include('layouts.errors')

                  </form>


        </div>
    </div>
  </div>
@endsection
