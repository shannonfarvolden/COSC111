<div class="form-group">
    {!! Form::label('topic', 'Title') !!}
    {!! Form::text('topic', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slide_set', 'Slide Set Number') !!}
    {!! Form::number('slide_set', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lecture', 'Week') !!}
    {!! Form::number('lecture', null, ['class' => 'form-control']) !!}
</div>
<div>
    {!! Form::label('slides[]', 'Add slides') !!}
    {!! Form::file('slides[]', ['multiple'=>true]) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>
