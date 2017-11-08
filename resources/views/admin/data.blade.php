@extends('app')

@section('content')
    <div class="page-header">
        <h1>Student Data</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h4>Marks</h4>
            <a href="{{ action('GradesController@finalMark') }}" class="btn btn-primary">
                Generate Final Marks
            </a>
            <a href="{{ action('GradesController@download') }}" class="btn btn-primary">
               Download to csv
            </a>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <h4>Web Use</h4>
        </div>
    </div>

@endsection
