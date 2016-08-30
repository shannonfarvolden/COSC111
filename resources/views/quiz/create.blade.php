@extends('app')

@section('content')
    <div class="page-header center-title">
        <h1>Create Quiz</h1>
    </div>
    @include('partials.error')
    {!! Form::open(['url' => 'quiz']) !!}
    @include('quiz.form', ['submitButtonText' => 'Create'])
    {!! Form::close() !!}
@endsection