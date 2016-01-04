@extends('app')

@section('content')
    <div class="page-header">
        <h1>Attempts</h1>
    </div>
    <h3><u>{{$attempts->first()->name}}</u></h3>
        @foreach($attempts as $attempt)
            <h5>Score {{$attempt->pivot->score}}/10</h5>
            <h5>Attempt #{{$attempt->pivot->attempt}}</h5>
            <br>
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