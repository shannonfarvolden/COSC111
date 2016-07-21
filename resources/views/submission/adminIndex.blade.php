@extends('app')

@section('content')
    <div class="page-header">
        <h1>Submissions</h1>
    </div>

    <a href="{{ action('SubmissionsController@create') }}" class=" btn btn-primary margin-button"> Create Submission </a>
    @foreach($submissions as $submission)
        <div class="panel panel-default">
            <div class="panel-body">
                <p>{{$submission->name}}</p>
                <br><a href="{{action('AdminController@mark', $submission->id)}}"
                       class="btn btn-default">Grade Students</a>
                <a href="{{action('SubmissionsController@edit', [$submission->id])}}"
                   class="btn btn-default">Edit Submission </a>
                <a href="#" class=" btn btn-default"> Delete Submission</a>
            </div>
        </div>
    @endforeach
@endsection