
@extends('layouts.app')
<title>Book Swap: Explore Page</title>
<style>
    input[type=textz] {
      width: 800px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
      background-color: white;
      background-image: url('searchicon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      padding: 12px 20px 12px 40px;
      -webkit-transition: width 0.4s ease-in-out;
      transition: width 0.4s ease-in-out;
      }


    html, body {
        background-color: #F0FFFF;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    .panel-heading p {
      font-size:  15px;
      font-weight: bold;
      color: #696969;
      display: inline;
    }
    .panel-heading{
      text-align: center;

    }
</style>
@section('content')

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">


            <!-- Current Tasks -->
            @if (count($exchange) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p> Books for Sale <p>
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
                                        <td class="table-text"><div><a href="https://outlook.office.com/owa/?realm=ggc.edu&vd=clawmail&subject=SUBJECT&body=BODY&to={{$exchange->email}}&path=/mail/action/compose" target="_blank">{{ $exchange->email }}</a></div></td>

                                        <!-- Task Delete Button -->
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <p>  There are no results for this book.</p>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
