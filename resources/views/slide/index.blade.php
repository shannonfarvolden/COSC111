@extends('app')

@section('content')
    <div class="page-header">
        <h1>Slides</h1>
    </div>

    <a href="{{ action('SlidesController@show', [6]) }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <h7>Slide Set 6</h7>
            </div>
        </div>
    </a>

@endsection