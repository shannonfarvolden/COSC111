@extends('app')

@section('content')
    <div class="page-header">
        <h1>Surveys</h1>
    </div>
    @if(Auth::user()->admin)
        <a href="{{ action('SurveyController@create') }}" class=" btn btn-primary margin-button"> Create Survey </a>
    @endif
    @foreach($surveys->whereLoose('active',1) as $survey)
        <a href="{{ action('SurveyController@show', $survey) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{$survey->name}}</p>
                    @if(Auth::user()->admin)
                        <a href="{{action('SurveyController@edit', [$survey])}}"
                           class="btn btn-default">Edit Survey </a>
                        {!! Form::open(['method' => 'DELETE', 'action' => ['SurveyController@destroy', $survey], 'style' => 'display:inline;']) !!}
                        {!! Form::submit('Delete Survey', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </a>
    @endforeach
    @if(Auth::user()->admin)
        @if(!$surveys->whereLoose('active',0)->isEmpty())
            <hr>
            <div class="page-header">
                <h1>Non active surveys</h1>
            </div>
            @foreach($surveys->whereLoose('active',0) as $survey)
                <a href="{{ action('SurveyController@show', $survey) }}">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>{{$survey->name}}</p>
                                <a href="{{action('SurveyController@edit', [$survey])}}"
                                   class="btn btn-default">Edit Survey </a>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['SurveyController@destroy', $survey], 'style' => 'display:inline;']) !!}
                                {!! Form::submit('Delete Survey', ['class' => 'btn btn-default']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    @endif
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