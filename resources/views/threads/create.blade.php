@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Thread</h1>
    </div>
    @include('partials.error')
    {!! Form::open(['url' => 'thread']) !!}
    @include('threads.form', ['submitButtonText' => 'Create Thread'])
    {!! Form::close() !!}
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Create Thread',
            page: '/thread/create'
        });
    </script>
@endsection