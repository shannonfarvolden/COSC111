<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evaluator')->unsigned();
            $table->integer('evaluatee')->unsigned();
            $table->integer('peer_evaluation_id')->unsigned();
            $table->float('mark');
            $table->text('feedback')->nullable();
            $table->timestamps();

            $table->foreign('evaluator')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('evaluatee')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('peer_evaluation_id')
                ->references('id')
                ->on('peer_evaluations')
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
        Schema::drop('assessments');
    }
}
