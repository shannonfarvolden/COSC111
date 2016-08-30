@extends('app')

@section('content')
    <div class="page-header">
        <h1>Submissions</h1>
    </div>

    @foreach($submissions as $submission)
        <a style="color:black; text-decoration:none" href="{{ action('SubmissionsController@studentCreate', $submission) }}">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{$submission->name}}
                </div>
            </div>
        </a>
    @endforeach
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