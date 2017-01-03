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
    {!! Form::label('admin', 'Give Admin Functionality') !!}
    {!! Form::checkbox('admin') !!}
</div>