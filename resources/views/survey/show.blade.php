@extends('app')

@section('content')
    <div class="page-header">
        <h1>Survey</h1>
    </div>

    {!! Form::open([ 'action' => 'SurveyController@store']) !!}
    <h5>How many years of post-secondary education have you completed?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question1', 1 ) !!}1
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[1]', 2 ) !!}2
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[1]', 3 ) !!}3
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[1]', 4 ) !!}4 and up
            </label>
        </div>
    </div>
    <br>
    <h5>What is your gender?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[2]', 'female' ) !!}Female
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[2]', 'male' ) !!}Male
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[2]', 'other' ) !!}Other
            </label>
        </div>
    </div>
    <br>
    <h5>How much programming experience do you have?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[3]', 'Programmed in an OOP language (e.g., C++, Java, etc.)' ) !!}Programmed
                in an OOP language (e.g., C++, Java, etc.)
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[3]', 'Programmed in some other programming language (e.g., C, VB, Javascript, etc.)' ) !!}
                Programmed in some other programming language (e.g., C, VB, Javascript, etc.)
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[3]', 'Experience writing HTML/CSS or other markup language' ) !!}Experience
                writing HTML/CSS or other markup language

            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[3]', 'No programming experience' ) !!}No programming experience

            </label>
        </div>
    </div>
    <br>
    <h5>Why are you taking this course?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[4]', 'I intend on majoring in computer science' ) !!}I intend on majoring in
                computer science
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[4]', 'I am exploring the possibility of majoring in computer science' ) !!}I
                am exploring the possibility of majoring in computer science
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[4]', 'I need it for a non-computer science degree requirement' ) !!}I need it
                for a non-computer science degree requirement
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[4]', 'This course seems like an easy elective' ) !!}This course seems like an
                easy elective
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[4]', 'other' ) !!}Other
            </label>
        </div>
    </div>
    <br>
    <h5>What mark did you get in the prerequisite math course (one of PREC 12, MATH 12, MATH 125)?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[5]', '90% or above' ) !!}90% or above
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[5]', '80%-89%' ) !!}80%-89%
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[5]', '70%-79%' ) !!}70%-79%
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[5]', 'less than 70%' ) !!}less than 70%
            </label>
        </div>
    </div>
    <br>
    <h5>What mark do you plan to get in the course?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[6]', '90% or above' ) !!}90% or above
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[6]', '80%-89%' ) !!}80%-89%
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[6]', '70%-79%' ) !!}70%-79%
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[6]', '60% - 69%' ) !!}60% - 69%
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[6]', '50%-59%' ) !!}50%-59%
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[6]', 'No plans, I’m just going to do the best I can' ) !!}No plans, I’m just
                going to do the best I can
            </label>
        </div>
    </div>
    <br>
    <h5>How much time do you plan on spending on this course outside class/lab time each week?</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[7]', 'Less than 1 hour' ) !!}Less than 1 hour
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[7]', '1-2 hrs' ) !!}1-2 hrs
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[7]', '3-4 hrs' ) !!}3-4 hrs
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[7]', '4-6 hrs' ) !!}4-6 hrs
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[7]', '6-8 hrs' ) !!}6-8 hrs
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[7]', '8+ hrs' ) !!}8+ hrs
            </label>
        </div>
    </div>
    <br>
    <h5>Indicate to what extent do you agree with the following statement: “You are good at taking tests.”</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[8]', 5 ) !!}Strongly Agree
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[8]', 4 ) !!}Agree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[8]', 3 ) !!}Neutral
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[8]', 2 ) !!}Disagree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[8]', 1 ) !!}Strongly Disagree
            </label>
        </div>
    </div>
    <br>
    <h5>Indicate to what extent do you agree with the following statement: “You do all the assigned homework and
        readings to the best of your ability.”</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 5 ) !!}Strongly Agree
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 4 ) !!}Agree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 3 ) !!}Neutral
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 2 ) !!}Disagree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 1 ) !!}Strongly Disagree
            </label>
        </div>
    </div>
    <br>
    <h5>Indicate to what extent do you agree with the following statement: “You understand what you read in
        textbooks.”</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 5 ) !!}Strongly Agree
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 4 ) !!}Agree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 3 ) !!}Neutral
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 2 ) !!}Disagree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[9]', 1 ) !!}Strongly Disagree
            </label>
        </div>
    </div>
    <br>
    <h5>Indicate to what extent do you agree with the following statement: “You ask and answer questions in class.”</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[10]', 5 ) !!}Strongly Agree
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[10]', 4 ) !!}Agree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[10]', 3 ) !!}Neutral
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[10]', 2 ) !!}Disagree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[10]', 1 ) !!}Strongly Disagree
            </label>
        </div>
    </div>
    <br>
    <h5>Indicate to what extent do you agree with the following statement: “You ask and answer questions in class.”</h5>
    <div class="answers">
        <div class="radio">
            <label>
                {!! Form::radio( 'question[11]', 5 ) !!}Strongly Agree
            </label>
        </div>

        <div class="radio">
            <label>
                {!! Form::radio( 'question[11]', 4 ) !!}Agree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[11]', 3 ) !!}Neutral
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[11]', 2 ) !!}Disagree
            </label>
        </div>
        <div class="radio">
            <label>
                {!! Form::radio( 'question[11]', 1 ) !!}Strongly Disagree
            </label>
        </div>
    </div>
    <br>


    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
