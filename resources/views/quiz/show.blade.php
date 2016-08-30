@extends('app')

@section('content')

    <div class="page-header">
        <h1>{{$quiz->name}}</h1>
    </div>
    {!! Form::open([ 'action' => ['QuizzesController@userQuiz', $quiz->id]]) !!}
    <?php $count=1;?>
    @foreach($quiz->questions->shuffle() as $question)
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$count}}) {{$question->question}}</pre>
                @foreach($question->answers->shuffle() as $answer)
                    <div class="radio">
                        <label>
                            {!! Form::radio('select['.$count.']', $answer->correct ) !!}{{$answer->answer}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <?php $count++; ?>
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