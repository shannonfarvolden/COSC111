@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quiz Completed</h1>
    </div>
    <h3>Your score was: {{$score}}/10</h3>
    <h3>Attempt # {{$attempt}}</h3>
@endsection