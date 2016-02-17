@extends('app')

@section('content')
    <div class="jumbotron">
        <h2>Survey 2 [2 bonus pts]</h2>
        <p>Due: Monday 11:59 pm on February 22nd</p>
    </div>
    @if($surveyCompleted)
        <h3>Survey Completed!</h3>
    @else
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
        {!! Form::open([ 'action' => 'SurveyController@store2']) !!}
        {!! Form::hidden('number', 1) !!}
        <h5>Roughly, the number of hours that I spent studying for this midterm was:</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 1 ) !!}< 2 hours
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 2 ) !!}2-4 hours
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 3 ) !!}4-6 hours
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 4 ) !!}6-8 hours
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_1', 5 ) !!}> 8 hours
                </label>
            </div>
        </div>
        <br>
        <h5>As part of my test preparation for this midterm, I :</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_2', 1 ) !!}Read the lecture slides.
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_2', 2 ) !!}Read and worked through the examples in the lecture slides.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_2', 3 ) !!}Didn’t look at the lecture slides.
                </label>
            </div>
        </div>
        <br>
        <h5>As part of my test preparation for this midterm, I :</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 1 ) !!}Reviewed labs and assignments.
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 2 ) !!}
                    Attempted some exercises in the labs and assignments again.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_3', 3 ) !!}Didn’t study from labs/assignments at all.
                </label>
            </div>
        </div>
        <br>
        <h5>As part of my test preparation for this midterm, I :</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 1 ) !!}Read the quiz questions (without doing them).
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 2 ) !!}Practiced doing the quizzes online.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_4', 3 ) !!}Chose not to study using the quizzes.
                </label>
            </div>
        </div>
        <br>
        <h5>Using the course textbook, I:</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 1 ) !!}Read on all the topics on the course schedule to supplement my learning in lecture.
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 2 ) !!}Read some topics on the course schedule to supplement my learning in lecture.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_5', 3 ) !!}Didn’t read my text at all.
                </label>
            </div>
        </div>
        <br>
        <h5>Using the course textbook, I:</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 1 ) !!}Worked on all checkpoint questions within each chapter.</label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 2 ) !!}Worked on some checkpoint questions within each chapter.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_6', 3 ) !!}Didn’t complete checkpoint questions in the text at all.
                </label>
            </div>
        </div>
        <br>
        <h5>Using the course textbook, I:</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 1 ) !!}Worked on some programming exercises at the end of each chapter and checked against solutions provided online.
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 2 ) !!}Worked on and completed some programming exercises but didn’t check answers.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 3 ) !!}Tried some programming questions but was unable to complete them.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_7', 4 ) !!}Didn’t work on programming exercises at all.
                </label>
            </div>
        </div>
        <br>
        <h5>When I practice doing programming exercises, I:</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 1 ) !!}Start by understanding the problem, break down the problem into manageable steps, then translate them into Java code.
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 2 ) !!}Start typing Java code into Eclipse immediately.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 3 ) !!}Start writing Java code on paper and then transfer the finished code into Eclipse.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_8', 4 ) !!}Didn’t do any programming practice.
                </label>
            </div>
        </div>
        <br>
        <h5>The night before the midterm I managed to get:</h5>
        <div class="answers">
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 1 ) !!}less than 4 hours of sleep.
                </label>
            </div>

            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 2 ) !!}4-6 hours of sleep.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 3 ) !!}6-8 hours of sleep.
                </label>
            </div>
            <div class="radio">
                <label>
                    {!! Form::radio( 'question_9', 4 ) !!}> 8 hours of sleep.
                </label>
            </div>
        </div>
        <br>

        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    @endif
@endsection
@section('footer')
    {{--Sends pageview google anaytics--}}
    <script>
        ga('send', {
            hitType: 'pageview',
            title: 'Survey',
            page: '/survey'
        });
    </script>
@endsection