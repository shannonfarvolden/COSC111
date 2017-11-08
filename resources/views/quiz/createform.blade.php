{{csrf_field()}}
<div class="row">
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-body">
            <div class="form-group ">
                {!! Form::label('name', 'Quiz Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <hr>

            @for($i = 0; $i<10; $i++)
                <div class="form-group">
                    {!! Form::label('question['.$i.']', 'Question '.($i+1)) !!}
                    {!! Form::textarea('question['.$i.']', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>
                @for($j = 0; $j<4; $j++)
                    <div class="row">
                        <div class="form-group col-md-offset-2 col-md-10">
                            {!! Form::label('answer['.$i.']['.$j.']', 'Answer '.chr($j+65)) !!}
                            {!! Form::text('answer['.$i.']['.$j.']', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                @endfor
                <div class="form-group col-md-offset-2 col-md-10">
                    {!! Form::label('correct['.$i.']', 'Correct Answer') !!}
                    {!! Form::select('correct['.$i.']', ['0'=>'A','1'=>'B','2'=>'C','3'=>'D'], null, ['class' => 'form-control']) !!}
                </div>
            @endfor
            <div class="form-group">
                {!! Form::label('active', 'Active Quiz (students can see quiz)') !!}
                {!! Form::checkbox('active') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
