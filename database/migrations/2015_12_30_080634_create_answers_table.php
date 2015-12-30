<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table)
        {
            $table->integer('number')->unsigned();
            $table->integer('question_number')->unsigned();
            $table->integer('quiz_number')->unsigned();
            $table->text('answer');
            $table->boolean('correct');
            $table->timestamps();

            $table->primary(['number', 'question_number', 'quiz_number']);
            $table->foreign('question_number')
                ->references('number')
                ->on('questions');
            $table->foreign('quiz_number')
                ->references('number')
                ->on('quizzes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
