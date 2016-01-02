@extends('app')

@section('content')
    <div class="page-header">
        <h1>Slides</h1>
    </div>

    {{--@foreach($slides as $slide)--}}
    {{--<a href="{{ action('SlidesController@show', [1]) }}">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-body">--}}
    {{--<h7>Lecture {{$slide->slide_set}} - {{$slide->topic}}</h7>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--@endforeach--}}

    <a href="{{ action('SlidesController@show', [1]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Lecture 01 - Overview</h7>
            </div>
        </div>
    </a>
    <a href="{{ action('SlidesController@show', [2]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Lecture 01 - Introduction to Computers, Programs, and Java</h7>
            </div>
        </div>
    </a>
    <a href="{{ action('SlidesController@show', [3]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Lecture 01 - Introduction to Computers, Programs, and Java contd.</h7>
            </div>
        </div>
    </a>
    <a href="{{ action('SlidesController@show', [4]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Lecture 01 - Summary</h7>
            </div>
        </div>
    </a>
    <a href="{{ action('SlidesController@show', [5]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Lecture 01 - Individual</h7>
            </div>
        </div>
    </a>

    <a href="{{ action('SlidesController@show', [6]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Lecture 01 - Team</h7>
            </div>
        </div>
    </a>

@endsection