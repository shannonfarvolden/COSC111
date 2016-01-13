@extends('app')

@section('content')
    <div class="panel panel-default heading-margin">
        <div class="panel-body padding-sides">
            <div class="page-header">
                <h1>{{$submission->name}} Submission</h1>
            </div>

            {!! Form::open([ 'action' => ['SubmissionsController@store', $submission->id], 'files' => true]) !!}
            @include('submission.form')
            {!! Form::close() !!}

        </div>
    </div>

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