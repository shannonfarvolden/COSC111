@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quizzes</h1>
    </div>

    @foreach($quizzes as $quiz)
        <a style="color:black; text-decoration:none" href="{{ action('QuizzesController@show', [$quiz->number]) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{$quiz->name}}</p>
                    @if(Auth::user()->hasQuizAttempt($quiz->number))
                        @if(Auth::user()->canRetakeQuiz($quiz->number))
                            <p>Retake</p>

                        @else
                            <p>Retake {{Auth::user()->timeTillRetake($quiz->number)}}</p>
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