<div class="row">
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-body">
            <div class="form-group ">
                {!! Form::label('name', 'Quiz Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <hr>

            @for($i = 1; $i<=10; $i++)
                <div class="form-group">
                    {!! Form::label('question['.$i.']', 'Question '.$i) !!}
                    {!! Form::textarea('question['.$i.']', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>
                @for($j = 1; $j<=4; $j++)
                    <div class="row">
                        <div class="form-group col-md-offset-2 col-md-10">
                            {!! Form::label('answer['.$i.']['.$j.']', 'Answer '.chr($j+64)) !!}
                            {!! Form::text('answer['.$i.']['.$j.']', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                @endfor
                <div class="form-group col-md-offset-2 col-md-10">
                    {!! Form::label('correct['.$i.']', 'Correct Answer') !!}
                    {!! Form::select('correct['.$i.']', ['1'=>'A','2'=>'B','3'=>'C','4'=>'D'], null, ['class' => 'form-control']) !!}
                </div>
            @endfor
            <div class="form-group">
                {!! Form::label('active', 'Active Submission (students can see quiz)') !!}
                {!! Form::checkbox('active') !!}
            </div>
            <div class="form-group">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
