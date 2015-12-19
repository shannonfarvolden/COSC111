@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $thread->title }}</h3>
        </div>
        <div class="panel-body">
            <h7>{{$thread->body}}</h7>
        </div>
    </div>
    <h7>Category: {{$thread->category}}</h7>
    <br><br><a href="{{ action('ThreadsController@create') }}" class=" btn btn-default"> Reply</a>


@endsection
