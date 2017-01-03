@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">
                        @include('partials.error')
                        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user]]) !!}
                        @if(Auth::user()->admin)
                            @include('users.adminform')
                        @endif
                        @include('users.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Edit Account',
            page: '/users/edit'
        });
    </script>
@endsection