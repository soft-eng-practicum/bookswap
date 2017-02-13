@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    The testing page worked

                    <form>
                        Title: <input type="text" name="booktitle"><br>
                        ISBN: <input type="text" name="booktitle"><br>
                        Author: <input type="text" name="booktitle"><br>
                        Comment: <textarea rows="5" cols="40"></textarea>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection