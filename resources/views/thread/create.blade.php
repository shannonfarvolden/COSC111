@extends('app')

@section('content')
    <div class="page-header">
        <h1>Create Thread</h1>
    </div>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['url' => 'forum']) !!}
    @include('thread.form', ['submitButtonText' => 'Create Thread'])
    {!! Form::close() !!}
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Create Thread',
            page: '/forum/create'
        });
    </script>
@endsection