@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-heading" style="color:#696969;"><strong><center> Profile</strong></center></div>
                  @if (count($exchange) > 0)
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <table class="table table-striped task-table">
                                  <thead>
                                      <th>Books Cover</th>
                                      <th>Books Title</th>
                                      <th>Condition</th>
                                      <th>Description</th>
                                      <th>Price</th>
                                      <th>Contact</th>
                                      <th>ID</th>
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
                                              <td class="table-text"><div>${{ $exchange->id}}</div></td>
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
                      </div>
                  @endif
              </div>
            </div>
        </div>
    </div>
@endsection
