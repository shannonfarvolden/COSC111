@extends('app')

@section('content')
    <div class="page-header">
        <h1>Quiz Completed <small>Note: Quizzes no longer count for marks</small></h1>
    </div>
    <h3>Your score was: {{$score}}/10</h3>
    {{--<h3>Attempt # {{$attempt}}</h3>--}}
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