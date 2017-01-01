<div class="row">
    <div class="panel panel-default col-md-offset-3 col-md-6">
        <div class="panel-body">
            <div class="form-group ">
                {!! Form::label('name', 'Quiz Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <hr>

            @foreach($quiz->questions as $i => $question)
                <div class="form-group">
                    {!! Form::label('question['.$i.']', 'Question '.($i+1)) !!}
                    {!! Form::textarea('question['.$i.']', $question->question, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>
                @foreach($question->answers as $j=>$answer )
                    <div class="row">
                        <div class="form-group col-md-offset-2 col-md-10">
                            {!! Form::label('answer['.$i.']['.$j.']', 'Answer '.chr($j+65)) !!}
                            {!! Form::textarea('answer['.$i.']['.$j.']', $answer->answer, ['class' => 'form-control','rows' => 1]) !!}
                        </div>
                    </div>
                <?php
                    if($answer->correct)
                        $ans = $j;
                    ?>
                @endforeach
                <div class="form-group col-md-offset-2 col-md-10">
                    {!! Form::label('correct['.$i.']', 'Correct Answer') !!}
                    {!! Form::select('correct['.$i.']', ['0'=>'A','1'=>'B','2'=>'C','3'=>'D'], $ans, ['class' => 'form-control']) !!}
                </div>
            @endforeach
            <div class="form-group">
                {!! Form::label('active', 'Active Submission (students can see quiz)') !!}
                {!! Form::checkbox('active') !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
</div>
