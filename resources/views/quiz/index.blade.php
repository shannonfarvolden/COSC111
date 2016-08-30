@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quizzes</h1>
    </div>
    @if(Auth::user()->admin)
        <a href="{{ action('QuizzesController@create') }}" class=" btn btn-primary margin-button"> Create Quiz </a>
    @endif
    @foreach($quizzes as $quiz)
        <a style="color:black; text-decoration:none" href="{{ action('QuizzesController@show', [$quiz->id]) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{$quiz->name}}</p>
                    @if(Auth::user()->hasQuizAttempt($quiz->id))
                        @if(Auth::user()->canRetakeQuiz($quiz->id))
                            <p>Retake</p>

                        @else
                            <p>Retake {{Auth::user()->timeTillRetake($quiz->id)}}</p>
                        @endif
                    @else
                        <p>Take Now</p>
                    @endif
                    @if(Auth::user()->admin)
                        <a href="{{action('QuizzesController@edit', $quiz)}}"
                           class="btn btn-default">Edit Quiz </a>
                        {!! Form::open(['method' => 'DELETE', 'action' => ['QuizzesController@destroy', $quiz], 'style' => 'display:inline;']) !!}
                        {!! Form::submit('Delete Quiz', ['class' => 'btn btn-default']) !!}
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
            title: 'Quiz',
            page: '/quiz'
        });
    </script>
@endsection