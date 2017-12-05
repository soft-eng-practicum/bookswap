
@extends('layouts.app')
<title>BookSwap | Available Books</title>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="panel">
                    <div class="panel-heading"><h1>Available Books<h2></div>

                    <!-- Current Tasks -->
                    @if (count($exchange) > 0)
                    <div class="panel-body">
                        <table class="table table-dark table-hover table-responsive task-table">
                            <thead>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Condition</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Contact</th>
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
                                        <td class="table-text"><div><a href="https://outlook.office.com/owa/?realm=ggc.edu&vd=clawmail&subject=SUBJECT&body=BODY&to={{$exchange->email}}&path=/mail/action/compose" target="_blank">{{ $exchange->email }}</a></div></td>

                                        <!-- Task Delete Button -->
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="panel-body"><h3>No available books</h3></div>
                @endif
                </div>

            </div>
        </div>
    </div>
@endsection
