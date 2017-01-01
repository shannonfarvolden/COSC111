
<div class="form-group">
    {!! Form::label('first_name', 'First Name') !!}
    {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Last Name') !!}
    {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('student_number', 'Student Number') !!}
    {!! Form::number('student_number', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lab', 'Lab Section') !!}
    {!! Form::select('lab', ['L01'=>'L01', 'L02'=>'L02', 'L03'=>'L03'], old('lab'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>