@extends('app')

@section('content')
    <div class="page-header">
        <h1>Slide Sets</h1>
    </div>

    <a href="{{ action('SlidesController@create') }}" class=" btn btn-primary margin-button"> Create Slides </a>
    @foreach($slides as $slide)
        <div class="panel panel-default">
            <div class="panel-body">
                <p>{{$slide->topic}}</p>
                <br>
                <a href="{{action('SlidesController@edit', [$slide->slide_set])}}"
                   class="btn btn-default">Edit Slides </a>
                <a href="{{action('SlidesController@destroy', [$slide->slide_set])}}" class=" btn btn-default"> Delete Slide Set</a>
            </div>
        </div>
    @endforeach
@endsection