<div>
    {!! Form::label('submissions[]', 'File Submission') !!}
    {!! Form::file('submissions[]', ['multiple'=>true]) !!}
</div><br>
<div class="form-group">
    {!! Form::label('comments', 'Comments') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control', 'rows'=>5]) !!}
</div>
<div class="form-group">
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
</div>