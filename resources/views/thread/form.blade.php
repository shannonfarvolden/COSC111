<div class="form-group">
    {!! Form::label('category', 'Category') !!}
    {!! Form::select('category', ['Inheritance'=>'Inheritance', 'Interface'=>'Interface', 'Abstract'=>'Abstract', 'Linked Lists'=>'Linked Lists', 'Other'=>'Other'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Content') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('anonymous', 'Anonymous User') !!}
    {!! Form::checkbox('anonymous') !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>
