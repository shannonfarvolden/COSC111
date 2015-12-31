@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$quiz->name}}</h1>
    </div>
    {!! Form::open([ 'action' => 'QuizzesController@store']) !!}
    {!! Form::hidden('name', 'Test') !!}
    {!! Form::hidden('answer[0]', 1) !!}
    @foreach($quiz->questions as $question)
        <h5>{{$question->number}}) {{$question->question}}</h5>
        @foreach($question->answers as $answer)

            <div class="radio">
                <label>
                    {!! Form::radio('answer['.$question->number.']', $answer->correct ) !!}{{$answer->answer}}
                </label>
            </div>
        @endforeach
    @endforeach
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@endsection