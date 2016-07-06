@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quizzes</h1>
    </div>

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