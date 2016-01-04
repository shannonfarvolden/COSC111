@extends('app')

@section('content')
    <div class="page-header">
        <h1>Survey</h1>
    </div>
    @if(Auth::user()->survey_completed)
        <h1>Survey Completed!</h1>
    @else

        {!! Form::open([ 'action' => 'SurveyController@store']) !!}
        <h5>How many years of post-secondary education have you completed?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 1 ) !!}0
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 2 ) !!}1
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 3 ) !!}2
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 4 ) !!}3
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 5 ) !!}4 and up
                </label>
            </div>
        </div>
        <br>
        <h5>What is your gender?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_2', 1 ) !!}Female
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_2', 2 ) !!}Male
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_2', 3 ) !!}Other
                </label>
            </div>
        </div>
        <br>
        <h5>How much programming experience do you have?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 1 ) !!}Programmed
                    in an OOP language (e.g., C++, Java, etc.)
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 2 ) !!}
                    Programmed in some other programming language (e.g., C, VB, Javascript, etc.)
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 3 ) !!}Experience
                    writing HTML/CSS or other markup language

                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 4 ) !!}No programming experience

                </label>
            </div>
        </div>
        <br>
        <h5>Why are you taking this course?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 1 ) !!}I intend on majoring in
                    computer science
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 2 ) !!}I
                    am exploring the possibility of majoring in computer science
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 3 ) !!}I need it
                    for a non-computer science degree requirement
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 4 ) !!}This course seems like an
                    easy elective
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 5 ) !!}Other
                </label>
            </div>
        </div>
        <br>
        <h5>What mark did you get in the prerequisite math course (one of PREC 12, MATH 12, MATH 125)?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 1 ) !!}90% or above
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 2 ) !!}80%-89%
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 3 ) !!}70%-79%
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 4 ) !!}less than 70%
                </label>
            </div>
        </div>
        <br>
        <h5>What mark do you plan to get in the course?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 1 ) !!}90% or above
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 2 ) !!}80%-89%
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 3 ) !!}70%-79%
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 4 ) !!}60% - 69%
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 5 ) !!}50%-59%
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 6 ) !!}No plans, I’m just
                    going to do the best I can
                </label>
            </div>
        </div>
        <br>
        <h5>How much time do you plan on spending on this course outside class/lab time each week?</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 1 ) !!}Less than 1 hour
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 2 ) !!}1-2 hrs
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 3 ) !!}3-4 hrs
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 4 ) !!}4-6 hrs
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 5 ) !!}6-8 hrs
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 6 ) !!}8+ hrs
                </label>
            </div>
        </div>
        <br>
        <h5>Indicate to what extent do you agree with the following statement: “You are good at taking tests.”</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 1 ) !!}Strongly Agree
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 2 ) !!}Agree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 3 ) !!}Neutral
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 4 ) !!}Disagree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 5 ) !!}Strongly Disagree
                </label>
            </div>
        </div>
        <br>
        <h5>Indicate to what extent do you agree with the following statement: “You do all the assigned homework and
            readings to the best of your ability.”</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 1 ) !!}Strongly Agree
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 2 ) !!}Agree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 3 ) !!}Neutral
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 4 ) !!}Disagree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 5 ) !!}Strongly Disagree
                </label>
            </div>
        </div>
        <br>
        <h5>Indicate to what extent do you agree with the following statement: “You understand what you read in
            textbooks.”</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_10', 1 ) !!}Strongly Agree
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_10', 2 ) !!}Agree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_10', 3 ) !!}Neutral
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_10', 4 ) !!}Disagree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_10', 5 ) !!}Strongly Disagree
                </label>
            </div>
        </div>
        <br>
        <h5>Indicate to what extent do you agree with the following statement: “You ask and answer questions in
            class.”</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_11', 1 ) !!}Strongly Agree
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_11', 2 ) !!}Agree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_11', 3 ) !!}Neutral
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_11', 4 ) !!}Disagree
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_11', 5 ) !!}Strongly Disagree
                </label>
            </div>
        </div>
        <br>


        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    @endif
    @if ($errors->any())
        <br><div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
