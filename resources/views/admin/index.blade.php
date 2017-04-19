@extends('app')

@section('content')
    <br>
    <a href="/admin/overview">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Overview</p>
            </div>
        </div>
    </a>
    <a href="{{ url('/adminStats') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Detailed Class Stats</p>
            </div>
        </div>
    </a>
    <a href="{{ action('UsersController@index') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>All Users Info</p>
            </div>
        </div>
    </a>
    <a href="{{ action('TeamsController@index') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Teams</p>
            </div>
        </div>
    </a>
    <a href="{{ action('PeerEvaluationsController@index') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Peer Evaluations</p>
            </div>
        </div>
    </a>
    <a href="{{ action('AdminController@data') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Student Data</p>
            </div>
        </div>
    </a>
@endsection