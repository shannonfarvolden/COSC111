@extends('app')

@section('content')

    <div class="page-header">
        <h1>{{$quiz->name}}</h1>
    </div>
    {!! Form::open([ 'action' => ['QuizzesController@userQuiz', $quiz->id]]) !!}
    @foreach($quiz->questions->shuffle()->take(10) as $count=>$question)
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$count+1}}) {{$question->question}}</pre>
                @foreach($question->answers->shuffle() as $answer)
                    <div class="radio">
                        <label>
                            {!! Form::radio('select['.$count.']', $answer->id ) !!}{{$answer->answer}}
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