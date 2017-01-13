<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeerEvalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peer_evals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evaluator')->unsigned();
            $table->integer('evaluatee')->unsigned();
            $table->integer('submission_id')->unsigned();
            $table->float('mark');
            $table->text('feedback')->nullable();
            $table->nullableTimestamps();

            $table->foreign('evaluator')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('evaluatee')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('submission_id')
                ->references('id')
                ->on('submissions')
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
        Schema::drop('peer_evals');
    }
}
