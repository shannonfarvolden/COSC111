@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 2 [28 pts]</h2>
        <p>Due: Sunday Noon on March 04th</p>
        TBA
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>TBA
        </ul>
    </div>

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Assignments',
            page: '/assignments'
        });
    </script>
@endsection
