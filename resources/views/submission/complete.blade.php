@extends('app')

@section('content')
    <div class="page-header">
        <h1>{{$submission->name}} has been submitted!</h1>
    </div>
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Submission',
            page: '/submission/confirm'
        });
    </script>
@endsection