@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update</div>
                    <div class="panel-body">
                        @include('partials.error')
                        {!! Form::model($setting, ['method' => 'PATCH', 'action' => ['ThreadsController@updateSetting']]) !!}
                        <div class="form-group">
                            {!! Form::label('active_forum', 'Active Forum (students can see forum)') !!}
                            {!! Form::checkbox('active_forum') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
