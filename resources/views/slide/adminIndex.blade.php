@extends('app')

@section('content')
    <div class="page-header">
        <h1>Slide Sets</h1>
    </div>

    <a href="{{ action('SlidesController@create') }}" class=" btn btn-primary margin-button"> Create Slides </a>
    @foreach($slides as $slide)
        <div class="panel panel-default">
            <div class="panel-body">
                <p>{{$slide->name}}</p>
                <br><a href="{{action('AdminController@mark', $slide->id)}}"
                       class="btn btn-default">Grade Students</a>
                <a href="{{action('SlidesController@edit', [$slide->id])}}"
                   class="btn btn-default">Edit Submission </a>
                <a href="#" class=" btn btn-default"> Delete Submission</a>
            </div>
        </div>
    @endforeach
@endsection