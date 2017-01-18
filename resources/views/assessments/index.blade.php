@extends('app')

@section('content')
    <div class="page-header">
        <h1>Peer Evals</h1>
    </div>
    <a href="{{ action('PeerEval@create') }}" class=" btn btn-primary margin-button"> Create
        Submission </a>


    @foreach($evals as $eval)

            <div class="panel panel-default">
                <div class="panel-body">
                    <p>{{$submission->name}}</p>
                        <a href="{{action('AdminController@mark', $submission->id)}}"
                           class="btn btn-default">Grade Students</a>
                    @endif
                </div>
            </div>

    @endforeach

@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Peer Evals',
            page: '/evals'
        });
    </script>
@endsection