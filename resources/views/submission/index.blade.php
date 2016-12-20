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
                           class="btn btn-default">Edit Submission </a>
                        <a href="#" class=" btn btn-default"> Delete Submission</a>
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
                <a style="color:black; text-decoration:none"
                   href="{{ action('SubmissionsController@studentCreate', $submission) }}">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>{{$submission->name}}</p>

                                <a href="{{action('AdminController@mark', $submission->id)}}"
                                   class="btn btn-default">Grade Students</a>
                                <a href="{{action('SubmissionsController@edit', [$submission->id])}}"
                                   class="btn btn-default">Edit Submission </a>
                                <a href="#" class=" btn btn-default"> Delete Submission</a>
                        </div>
                    </div>
                </a>
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