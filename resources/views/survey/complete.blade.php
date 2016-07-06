@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$survey->name}} completed!</h1>
    </div>
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Survey',
            page: '/survey'
        });
    </script>
@endsection