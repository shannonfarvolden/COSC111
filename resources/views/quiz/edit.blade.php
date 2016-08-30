@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Edit Quiz</h1>
    </div>
    @include('partials.error')
    {!! Form::model($quiz, ['method' => 'PATCH', 'action' => ['QuizzesController@update', $quiz->id]]) !!}
    @include('quiz.form', ['submitButtonText' => 'Save'])
    {!! Form::close() !!}
@endsection