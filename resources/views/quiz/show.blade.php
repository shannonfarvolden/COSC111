@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$quiz->name}}</h1>
    </div>
    {!! Form::open([ 'action' => ['QuizzesController@store', $quiz->number]]) !!}
    @foreach($quiz->questions as $question)
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$question->number}}) {{$question->question}}</pre>
                @foreach($question->answers->where('quiz_number', $quiz->number) as $answer)
                    <div class="radio">
                        <label>
                            {!! Form::radio('answer['.$question->number.']', $answer->correct ) !!}{{$answer->answer}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Quiz',
            page: '/quiz'
        });
    </script>
@endsection