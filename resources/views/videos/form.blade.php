<div class="panel panel-default col-md-offset-2 col-md-8">
    <div class="panel-body">
        <div class="well">Note: Include full link ex. https://www.google.ca </div>
        <div class="form-group">
            {!! Form::label('name', 'Title') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('link', 'Link') !!}
            {!! Form::text('link', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('order', 'Order') !!}
            {!! Form::number('order', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
