@extends('app')

@section('content')
    <div class="page-header">
        <h1>Submissions</h1>
    </div>
    @if(Auth::user()->admin)
        <a href="{{ action('SubmissionsController@create') }}" class=" btn btn-primary margin-button"> Create
            Submission </a>
    @endif

    @foreach($submissions->whereLoose('active',1) as $submission)
        <a style="color:black; text-decoration:none"
           href="{{ action('SubmissionsController@studentCreate', $submission) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{$submission->name}}</p>

                    @if(Auth::user()->admin)
                        <a href="{{action('AdminController@mark', $submission->id)}}"
                           class="btn btn-default">Grade Students</a>
                        <a href="{{action('SubmissionsController@edit', [$submission->id])}}"
                           class="btn btn-default">Edit </a>
                        {!! Form::open(['method' => 'DELETE', 'action' => ['SubmissionsController@destroy', $submission], 'style' => 'display:inline;']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </a>
    @endforeach
    @if(Auth::user()->admin)
        @if(!$submissions->whereLoose('active',0)->isEmpty())
            <hr>
            <div class="page-header">
                <h1>Non active submissions</h1>
            </div>
            @foreach($submissions->whereLoose('active',0) as $submission)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>{{$submission->name}}</p>
                        <a href="{{action('AdminController@mark', $submission->id)}}"
                           class="btn btn-default">Grade Students</a>
                        <a href="{{action('SubmissionsController@edit', [$submission->id])}}"
                           class="btn btn-default">Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'action' => ['SubmissionsController@destroy', $submission], 'style' => 'display:inline;']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @endif
    @endif

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