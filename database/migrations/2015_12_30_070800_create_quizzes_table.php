x<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('total')->unsigned();
            $table->boolean('active')->default(false);
            $table->nullableTimestamps();
        });

        Schema::create('quiz_user', function (Blueprint $table)
        {

            $table->integer('user_id')->unsigned()->index();
            $table->integer('quiz_id')->unsigned()->index();
            $table->integer('score')->unsigned();
            $table->integer('attempt')->unsigned()->default(0);
            $table->nullableTimestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('quiz_id')
                ->references('id')
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

        Schema::drop('quiz_user');
        Schema::drop('quizzes');
    }
}
