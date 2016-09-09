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
    <a href="{{ url('/users') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>All Students Info</p>
            </div>
        </div>
    </a>
    <a href="{{ url('/admin/submission') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Manage & View Submissions</p>
            </div>
        </div>
    </a>

@endsection