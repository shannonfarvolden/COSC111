<div class="form-group">
    {!! Form::label('category', 'Category') !!}
    {!! Form::select('category', ['Assignments'=>'Assignments', 'Exams'=>'Exams', 'Lecture Material'=>'Lecture Material','Labs'=>'Labs', 'Complaints and Feedback' => 'Complaints and Feedback', 'Other'=>'Other'], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Message') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('anonymous', 'Post as anonymous user?') !!}
    {!! Form::checkbox('anonymous') !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>
