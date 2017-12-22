@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 9 [xx pts]</h2>
        <p>TBA</p>
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
            title: 'Labs',
            page: '/labs'
        });
    </script>
@endsection
