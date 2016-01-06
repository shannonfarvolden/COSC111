@extends('app')

@section('content')
    <div class="page-header">
        <h1>Make Submission</h1>
    </div>
    {!! Form::open(['url' => 'foo', 'files' => true]) !!}
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