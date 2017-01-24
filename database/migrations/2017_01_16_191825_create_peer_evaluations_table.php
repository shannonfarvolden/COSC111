<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeerEvaluationsTable extends Migration
{
    /**
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peer_evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
        Schema::create('peer_evaluation_submission', function (Blueprint $table) {
            $table->integer('peer_evaluation_id')->unsigned();
            $table->integer('submission_id')->unsigned();
            $table->timestamps();

            $table->foreign('peer_evaluation_id')
                ->references('id')
                ->on('peer_evaluations')
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
        Schema::drop('peer_evaluation_submission');
        Schema::drop('peer_evaluations');
    }
}
