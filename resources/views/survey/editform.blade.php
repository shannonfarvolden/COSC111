<div class="row">
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-body">
            <div class="form-group ">
                {!! Form::label('name', 'Survey Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <hr>

            @foreach($survey->questions as $i => $question)
                <div class="form-group">
                    {!! Form::label('question['.$i.']', 'Question '.($i+1)) !!}
                    {!! Form::textarea('question['.$i.']', $question->question, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>
                @foreach($question->answers as $j=>$answer )
                    <div class="row">
                        <div class="form-group col-md-offset-2 col-md-10">
                            {!! Form::label('answer['.$i.']['.$j.']', 'Option '.chr($j+65)) !!}
                            {!! Form::textarea('answer['.$i.']['.$j.']', $answer->answer, ['class' => 'form-control','rows' => 1]) !!}
                        </div>
                    </div>
                @endforeach
            @endforeach
            <div class="form-group">
                {!! Form::label('active', 'Active Survey (students can see survey)') !!}
                {!! Form::checkbox('active') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
