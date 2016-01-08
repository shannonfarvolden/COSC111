@extends('app')

@section('content')
    <div class="page-header">
        <h1>Select Submission To Grade</h1>
    </div>
    @foreach($submissions as $submission)
        <a href="{{ action('AdminController@mark', $submission->id) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{$submission->name}}</p>
                </div>
            </div>
        </a>
    @endforeach
@endsection