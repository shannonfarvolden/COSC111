@extends('app')

@section('content')
    <a href="{{ action('AdminController@admin') }}"><span class="glyphicon glyphicon-menu-left"
                                                          aria-hidden="true"></span>Back to admin</a>
    <div class="page-header center-title">
        <h1>Teams</h1>
    </div>
    <div class="text-center">
        <a href="{{ action('TeamsController@create') }}" class="btn btn-primary margin-button"> Add Team </a>
    </div>
    @foreach($teams as $team)
        <div class="panel panel-default">
            <div class="panel-body">
                <p> {{$team->name}}</p>
                <a href="{{ action('TeamsController@show', $team) }}"
                   class="btn btn-default">Manage Team Members </a>
                <a href="{{action('TeamsController@edit', [$team])}}"
                   class="btn btn-default">Edit Team Name </a>
                {!! Form::open(['method' => 'DELETE', 'action' => ['TeamsController@destroy', $team], 'style' => 'display:inline;']) !!}
                {!! Form::submit('Delete Team', ['class' => 'btn btn-default']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach

@endsection
