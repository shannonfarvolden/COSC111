<div class="row">
    <div class="col-md-offset-4 col-md-4 ">
        <div class="form-group">
            {!! Form::label('name', 'Peer Evaluation Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group" align="center">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>
