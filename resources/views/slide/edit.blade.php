@extends('app')

@section('content')
    <div class="page-header">
        <h1>Edit Slide Set</h1>
    </div>
        @include('partials.error')
    {!! Form::open([ 'action' => ['SlidesController@update']]) !!}
    @include('slide.form', ['submitButtonText' => 'Save'])
    {!! Form::close() !!}
    <form action="foo" method="POST" class="dropzone">
        {{csrf_field()}}
    </form>
    <br>
@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@endsection