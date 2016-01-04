@extends('app')

@section('content')
    <div class="page-header">
        <h1>Slides</h1>
    </div>

    @foreach($slides as $slide)
        <a href="{{ action('SlidesController@show', $slide->slide_set) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h7>Lecture {{$slide->lecture}} - {{$slide->topic}}</h7>
                </div>
            </div>
        </a>
    @endforeach

@endsection