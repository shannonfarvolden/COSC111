@extends('app')

@section('content')
    <div class="page-header">
        <h1>Surveys</h1>
    </div>
    @if(Auth::user()->admin)
        <a href="{{ action('SurveyController@create') }}" class=" btn btn-primary margin-button"> Create Survey </a>
    @endif
    @foreach($surveys as $survey)
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