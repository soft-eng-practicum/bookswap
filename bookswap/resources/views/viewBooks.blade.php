
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($books) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Books
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Books</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($books as $books)
                                    <tr>
                                        <td class="table-text"><div>{{ $books->title }}</div></td>
                                        <td class="table-text"><div>{{ $books->ISBN }}</div></td>
                                        <td class="table-text"><div>{{ $books->author }}</div></td>
                                        <!-- Task Delete Button -->
                                        <td>
                                          <a class = "btn btn-success" href = "/test" role = "button">Exchange</a> 
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
