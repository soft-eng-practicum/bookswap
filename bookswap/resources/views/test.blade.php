
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($exchange) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Books for Sale
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Books Cover</th>
                                <th>Books Title</th>
                                <th>Condition</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Contact</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($exchange as $exchange)
                                    <tr>

                                        <td class="table-text"><div><img id="myImg" src="{{ $exchange->img_thumbnail}}" width="107" height="98"></div></td>
                                        <td class="table-text"><div>{{ $exchange->title}}</div></td>
                                        <td class="table-text"><div>{{ $exchange->desc}}</div></td>
                                        <td class="table-text"><div>{{ $exchange->description }}</div></td>
                                        <td class="table-text"><div>${{ $exchange->price}}</div></td>
                                        <td class="table-text"><div>{{ $exchange->email}}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
