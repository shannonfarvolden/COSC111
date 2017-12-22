@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 1 [xx pts]</h2>
        <p>Due: Sunday 9:00am on Jan 28th</p>
        Brief overview
        <p></p>
        <b>What to Submit:</b>
        <ul>
            <li>Items to submit 
        </ul>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">1. Activity [xx pts]</h3>
        </div>
        <div class="panel-body">
		    Description
            <p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">2. Activity [xx pts]</h3>
        </div>
        <div class="panel-body">
		    Description
            <p>
        </div>
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
