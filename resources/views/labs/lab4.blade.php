@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Lab 4</h2>
        <p>TBA</p>
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