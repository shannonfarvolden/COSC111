@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 5 [28 pts + 2 bonus]</h2>
        <p>TBA</p>
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
            title: 'Labs',
            page: '/labs'
        });
    </script>
@endsection
