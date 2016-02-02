@extends('app')

@section('content')

    <div class="page-header">
        <h1>{{$quiz->name}}</h1>
    </div>
    {!! Form::open([ 'action' => ['QuizzesController@store', $quiz->number]]) !!}
    <?php $count=1;?>
    @foreach($quiz->questions->shuffle() as $question)
        {{--{!! Form::hidden('questions['.$count.']', $question->question) !!}--}}
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$count}}) {{$question->question}}</pre>
                @foreach($question->answers->whereLoose('quiz_number', $quiz->number)->shuffle() as $answer)
                    <div class="radio">
                        <label>
                            {!! Form::radio('select['.$count.']', $answer->correct ) !!}{{$answer->answer}}
                            {{--{!! Form::hidden('answers['.$count.']', $answer->answer) !!}--}}
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