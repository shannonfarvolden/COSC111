<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyAnswers extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_answers', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('survey_question_id')->unsigned();
            $table->text('answer');
            $table->timestamps();

            $table->foreign('survey_question_id')
                ->references('id')
                ->on('survey_questions')
                ->onDelete('cascade');
        });

        Schema::create('survey_user', function (Blueprint $table)
        {
            $table->integer('user_id')->unsigned()->index();
            $table->integer('survey_id')->unsigned()->index();
            $table->integer('survey_question_id')->unsigned()->index();
            $table->integer('survey_answer_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('survey_id')
                ->references('id')
                ->on('surveys')
                ->onDelete('cascade');
            $table->foreign('survey_question_id')
                ->references('id')
                ->on('survey_questions')
                ->onDelete('cascade');
            $table->foreign('survey_answer_id')
                ->references('id')
                ->on('survey_answers')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('survey_user');
        Schema::drop('survey_answers');
    }
}
