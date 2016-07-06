@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$survey->name}}</h1>
    </div>
    @include('partials.error')
    {!! Form::open([ 'action' => ['SurveyController@store', $survey]]) !!}
    <?php $count=1;?>
    @foreach($survey->questions as $question)
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$count}}) {{$question->question}}</pre>
                @foreach($question->answers as $answer)
                    <div class="radio">
                        <label>
                            {!! Form::radio('radio['.$count.']', $answer->id ) !!}{{$answer->answer}}
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
            title: 'Survey',
            page: '/survey'
        });
    </script>
@endsection