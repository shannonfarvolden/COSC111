@extends('app')

@section('content')
    <br>
    <a href="{{ url('/admin/submission') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Submissions</p>
            </div>
        </div>
    </a>
    <a href="{{ url('#') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Quizzes</p>
            </div>
        </div>
    </a>
    <a href="{{ url('/admin/slide') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Slide Sets</p>
            </div>
        </div>
    </a>
    <a href="{{ url('#') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Class Stats</p>
            </div>
        </div>
    </a>
    <a href="{{ url('/users') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Students</p>
            </div>
        </div>
    </a>
    <a href="{{ url('/admin/evaluation') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Evaluation Criteria</p>
            </div>
        </div>
    </a>
@endsection