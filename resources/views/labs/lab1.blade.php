@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 1 [14 pts]</h2>
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
