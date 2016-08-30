<div class="panel panel-default col-md-offset-2 col-md-8">
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('topic', 'Title') !!}
            {!! Form::text('topic', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('week', 'Week') !!}
            {!! Form::number('week', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category', 'Category') !!}
            {!! Form::select('category', ['topic'=>'Topic', 'summary'=>'Summary', 'exercise'=>'Exercise'], null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
