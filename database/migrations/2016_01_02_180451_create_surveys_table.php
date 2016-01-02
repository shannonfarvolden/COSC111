<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('question_1')->unsigned();
            $table->integer('question_2')->unsigned();
            $table->integer('question_3')->unsigned();
            $table->integer('question_4')->unsigned();
            $table->integer('question_5')->unsigned();
            $table->integer('question_6')->unsigned();
            $table->integer('question_7')->unsigned();
            $table->integer('question_8')->unsigned();
            $table->integer('question_9')->unsigned();
            $table->integer('question_10')->unsigned();
            $table->integer('question_11')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::drop('surveys');
    }
}
