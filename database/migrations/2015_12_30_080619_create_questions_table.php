<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table)
        {
            $table->integer('number')->unsigned();
            $table->integer('quiz_number')->unsigned();
            $table->text('question');
            $table->timestamps();

            $table->primary(['number', 'quiz_number']);

            $table->foreign('quiz_number')
                ->references('number')
                ->on('quizzes')
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
        Schema::drop('questions');
    }
}
