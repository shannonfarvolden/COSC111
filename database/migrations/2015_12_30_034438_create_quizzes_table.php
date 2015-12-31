<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->integer('number')->unsigned();
            $table->string('name');
            $table->string('chapters');
            $table->boolean('active')->default(false);
            $table->timestamps();

            $table->primary('number');
        });

        Schema::create('quiz_user', function(Blueprint $table){

            $table->integer('user_id')->unsigned()->index();
            $table->integer('quiz_number')->unsigned()->index();
            $table->integer('score')->unsigned();
            $table->integer('attempt')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::drop('quizzes');
        Schema::drop('quiz_user');
    }
}
