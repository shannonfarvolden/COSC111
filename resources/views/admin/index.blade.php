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
    <a href="{{ action('SurveyController@results') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Survey Results</p>
            </div>
        </div>
    </a>

@endsection