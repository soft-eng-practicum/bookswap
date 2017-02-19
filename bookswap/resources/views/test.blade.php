
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($exchange) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Exchange
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Exchanges</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($exchange as $exchange)
                                    <tr>
                                        <td class="table-text"><div>{{ $exchange->description }}</div></td>
                                        <td class="table-text"><div>${{ $exchange->price}}</div></td>

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
