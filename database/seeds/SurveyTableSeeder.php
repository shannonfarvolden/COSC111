<?php

use Illuminate\Database\Seeder;

class SurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->survey1();
        $this->survey2();
        $this->survey3();
    }

    /**
     * Create and seed survey 1.
     */
    public function survey1(){
        $survey = App\Survey::create(['name'=>'Survey 1', 'active'=> 0]);

        $q1 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'How many years of post-secondary education have you completed?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '0']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '1']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '2']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '3']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '4 and up']);

        $q2 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What is your gender?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Female']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Male']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Other']);

        $q3 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'How much programming experience do you have?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Programmed in an OOP language (e.g., C++, Java, etc.)']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Programmed in some other programming language (e.g., C, VB, Javascript, etc.)']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Experience writing HTML/CSS or other markup language']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'No programming experience']);

        $q4 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Why are you taking this course?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'I intend on majoring in computer science']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'I am exploring the possibility of majoring in computer science']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'I need it for a non-computer science degree requirement']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'This course seems like an easy elective']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Other']);

        $q5 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What mark did you get in the prerequisite math course (one of PREC 12, MATH 12, MATH 125)?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> '90% or above']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> '80%-89%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> '70%-79%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'less than 70%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'I have not taken any of the prerequisite math courses']);

        $q6 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What mark do you plan to get in the course?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> '90% or above']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> '80%-89%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> '70%-79%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> '60% - 69%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> '50%-59%']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'No plans, I\'m just going to do the best I can']);

        $q7 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=> 'How much time do you plan on spending on this course outside class/lab time each week?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Less than 1 hour']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> '1-2 hrs']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> '3-4 hrs']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> '4-6 hrs']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> '6-8 hrs']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> '8+ hrs']);

        $q8 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Indicate to what extent do you agree with the following statement: \"You are good at taking tests.\"']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Strongly Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Neutral']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Disagree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Strongly Disagree']);

        $q9 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Indicate to what extent do you agree with the following statement: \"You do all the assigned homework and readings to the best of your ability.\"']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'Strongly Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'Neutral']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'Disagree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'Strongly Disagree']);

        $q10 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Indicate to what extent do you agree with the following statement: \"You understand what you read in textbooks.\"']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Strongly Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Neutral']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Disagree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Strongly Disagree']);

        $q11 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Indicate to what extent do you agree with the following statement: \"You ask and answer questions in class.\"']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Strongly Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Agree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Neutral']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Disagree']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Strongly Disagree']);

    }

    /**
     * Create and seed survey 2.
     */
    public function survey2(){
        $survey = App\Survey::create(['name'=>'Survey 2', 'active'=> 0]);

        $q1 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Roughly, the number of hours that I spent studying for this midterm was:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '< 2 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '2-4 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '4-6 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '6-8 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '> 8 hours']);

        $q2 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'As part of my test preparation for this midterm, I :']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Read the lecture slides.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Read and worked through the examples in the lecture slides.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Didn\'t look at the lecture slides.']);

        $q3 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'As part of my test preparation for this midterm, I :']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Reviewed labs and assignments.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Attempted some exercises in the labs and assignments again.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Didn\'t study from labs/assignments at all.']);

        $q4 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'As part of my test preparation for this midterm, I :']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Read the quiz questions (without doing them).']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Practiced doing the quizzes online.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Chose not to study using the quizzes.']);

        $q5 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Using the course textbook, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'Read on all the topics on the course schedule to supplement my learning in lecture.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'Read some topics on the course schedule to supplement my learning in lecture.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'Didn\'t read my text at all.']);

        $q6 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Using the course textbook, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'Worked on all checkpoint questions within each chapter.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'Worked on some checkpoint questions within each chapter.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'Didn\'t complete checkpoint questions in the text at all.']);

        $q7 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Using the course textbook, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Worked on some programming exercises at the end of each chapter and checked against solutions provided online.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Worked on and completed some programming exercises but didn\'t check answers.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Tried some programming questions but was unable to complete them.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Didn\'t work on programming exercises at all.']);

        $q8 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'When I practice doing programming exercises, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Start by understanding the problem, break down the problem into manageable steps, then translate them into Java code.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Start typing Java code into Eclipse immediately.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Start writing Java code on paper and then transfer the finished code into Eclipse.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Didn\'t do any programming practice.']);

        $q9 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'The night before the midterm I managed to get:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'less than 4 hours of sleep.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> '4-6 hours of sleep.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> '6-8 hours of sleep.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> '> 8 hours of sleep.']);

        $q10 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What is your feedback on the review session?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'I went and found the session helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'I went but found the session not so helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Did not attend.']);

        $q11 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What is your feedback on the video lectures?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'I watched them and found them helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'I watched them but did not find them helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Did not watch them.']);

    }

    /**
     * Create and seed survey 3.
     */
    public function survey3(){
        $survey = App\Survey::create(['name'=>'Survey 3', 'active'=> 0]);

        $q1 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Roughly, the number of hours that I spent studying for this midterm was:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '< 2 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '2-4 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '4-6 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '6-8 hours']);
        App\SurveyAnswer::create(['survey_question_id'=>$q1->id, 'answer'=> '> 8 hours']);

        $q2 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'As part of my test preparation for this midterm, I :']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Read the lecture slides.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Read and worked through the examples in the lecture slides.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q2->id, 'answer'=> 'Didn\'t look at the lecture slides.']);

        $q3 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'As part of my test preparation for this midterm, I :']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Reviewed labs and assignments.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Attempted some exercises in the labs and assignments again.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q3->id, 'answer'=> 'Didn\'t study from labs/assignments at all.']);

        $q4 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'As part of my test preparation for this midterm, I :']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Read the quiz questions (without doing them).']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Practiced doing the quizzes online.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q4->id, 'answer'=> 'Chose not to study using the quizzes.']);

        $q5 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Using the course textbook, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'Read on all the topics on the course schedule to supplement my learning in lecture.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'Read some topics on the course schedule to supplement my learning in lecture.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q5->id, 'answer'=> 'Didn\'t read my text at all.']);

        $q6 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Using the course textbook, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'Worked on all checkpoint questions within each chapter.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'Worked on some checkpoint questions within each chapter.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q6->id, 'answer'=> 'Didn\'t complete checkpoint questions in the text at all.']);

        $q7 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'Using the course textbook, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Worked on some programming exercises at the end of each chapter and checked against solutions provided online.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Worked on and completed some programming exercises but didn\'t check answers.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Tried some programming questions but was unable to complete them.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q7->id, 'answer'=> 'Didn\'t work on programming exercises at all.']);

        $q8 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'When I practice doing programming exercises, I:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Start by understanding the problem, break down the problem into manageable steps, then translate them into Java code.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Start typing Java code into Eclipse immediately.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Start writing Java code on paper and then transfer the finished code into Eclipse.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q8->id, 'answer'=> 'Didn\'t do any programming practice.']);

        $q9 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'The night before the midterm I managed to get:']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> 'less than 4 hours of sleep.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> '4-6 hours of sleep.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> '6-8 hours of sleep.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q9->id, 'answer'=> '> 8 hours of sleep.']);

        $q10 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What is your feedback on the review session?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'I went and found the session helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'I went but found the session not so helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q10->id, 'answer'=> 'Did not attend.']);

        $q11 = App\SurveyQuestion::create(['survey_id'=>$survey->id, 'question'=>'What is your feedback on the video lectures?']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'I watched them and found them helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'I watched them but did not find them helpful.']);
        App\SurveyAnswer::create(['survey_question_id'=>$q11->id, 'answer'=> 'Did not watch them.']);

    }
}
