@extends('app')

@section('content')
    <div class="page-header">
        <h1>Lab 1 Submission</h1>
    </div>
    {!! Form::open(['url' => '/submission', 'files' => true]) !!}
    @include('submission.form')
    {!! Form::close() !!}
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Submission',
            page: '/submission/create'
        });
    </script>
@endsection