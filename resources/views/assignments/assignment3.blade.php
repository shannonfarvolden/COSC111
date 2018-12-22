@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 3 [35 pts]</h2>
        <p>Due: Thursday 11:59pm on April 05th</p>
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
