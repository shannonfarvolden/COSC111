<div class="form-group">
    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('anonymous', 'Anonymous User') !!}
    {!! Form::checkbox('anonymous') !!}
</div>
{!! Form::submit('Reply', ['class' => 'btn btn-primary']) !!}