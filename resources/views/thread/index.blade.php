@extends('app')

@section('content')
    <div class="page-header">
        <h1>Discussion Forum</h1>
    </div>
    <a href="{{ action('ThreadsController@create') }}" class=" btn btn-default"> Create Thread </a><br>

    @foreach( $threads as $thread)
        <a href="{{ action('ThreadsController@show', [$thread]) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h7>{{$thread->title}}</h7>
                </div>
            </div>
        </a>
    @endforeach

@endsection
