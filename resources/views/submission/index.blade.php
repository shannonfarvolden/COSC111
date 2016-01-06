@extends('app')

@section('content')
    <div class="page-header">
        <h1>Submissions</h1>
    </div>
    <a style="color:black; text-decoration:none" href="{{ action('SubmissionsController@create') }}">
        <div class="panel panel-default">
            <div class="panel-body">
                Lab 1
            </div>
        </div>
    </a>

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Submission',
            page: '/submission'
        });
    </script>
@endsection