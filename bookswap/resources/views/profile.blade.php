@extends('layouts.app')
<!-- FILE LOCATION: resources\views\layouts\app.blade.php
NOTE: this consists of the repetitive html & import information -->
<title>BookSwap | Profile</title>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <div class="panel">
                <div class="panel-heading"><h1>Profile</h1></div>
                @if (count($exchange) > 0)
                    <div class="panel-body">
                        <table class="table table-striped table-dark table-hover task-table">
                            <thead>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Condition</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Contact</th>
                                <!-- <th>ID</th> -->
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($exchange as $exchange)
                                <tr>
                                    <td class="table-text"><div><img id="myImg" class="icon-blankbook" src="{{ $exchange->img_thumbnail}}"></div></td>
                                    <td class="table-text"><div>{{ $exchange->title}}</div></td>
                                    <td class="table-text"><div>{{ $exchange->desc}}</div></td>
                                    <td class="table-text"><div>{{ $exchange->description }}</div></td>
                                    <td class="table-text"><div>${{ $exchange->price}}</div></td>
                                    <!--    <td class="table-text"><div>${{ $exchange->id}}</div></td> -->
                                    <td class="table-text"><div><a href="mailto:{{ $exchange->email }}" target="_blank">{{ $exchange->email }}</a></div></td>
                                    <td>    <!--Delete button -->
                                        {{ csrf_field() }}
                                        {{ Form::open(['method' => 'DELETE', 'route' => ['exchange.destroy', $exchange->exchange_id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}

                                    </td>
                                    <!-- Task Delete Button -->
                                    <td>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
