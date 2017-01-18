<div class="radio">
    <label>
        {!! Form::radio('mark', 0 ) !!}Mostly no shows.
    </label>
</div>
<div class="radio">
    <label>
        {!! Form::radio('mark', 0.5 ) !!}Low participation, doesn't really help out.
    </label>
</div>
<div class="radio">
    <label>
        {!! Form::radio('mark', 1 ) !!}Good participation, good effort, good team player.
    </label>
</div>
<div class="radio">
    <label>
        {!! Form::radio('mark', 1.5 ) !!}Active participation, good leader, looks up info.
    </label>
</div>
<div class="form-group">
    {!! Form::label('feedback', 'Feedback') !!}
    {!! Form::textarea('feedback', null, ['class'=>'form-control', 'rows' => 3]) !!}
</div>
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>