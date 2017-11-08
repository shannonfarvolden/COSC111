<div class="form-group">
    {!! Form::label('feedback', 'Feedback') !!}
    {!! Form::textarea('feedback', null, ['class'=>'form-control', 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::label('mark', 'Mark') !!}
    {!! Form::text('mark', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>