@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Assignment 3</h2>
        <p>TBA</p>
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