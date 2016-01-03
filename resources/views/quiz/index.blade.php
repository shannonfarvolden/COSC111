@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quizzes</h1>
    </div>
    @foreach($quizzes as $quiz)
        <a href="{{ action('QuizzesController@show', [$quiz->number]) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h7>{{$quiz->name}}</h7>
                </div>
            </div>
        </a>
    @endforeach
@endsection