@extends('app')

@section('content')
    <div class="page-header">
        <h1>Student Data</h1>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default text-center">
                <div class="panel-body">
                    <h4>Marks</h4>
                    <a href="{{ action('GradesController@finalMark') }}" class="btn btn-primary">
                        Generate Final Marks
                    </a>
                    <hr>
                    <a href="{{ action('GradesController@download') }}" class="btn btn-primary">
                       Download to CSV
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default text-center">
                <div class="panel-body">
                    <h4>Discussion Forum Data</h4>
                    <a href="{{ action('ThreadsController@download') }}" class="btn btn-primary">
                        Download json file
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
