<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_set_id')->unsigned();
            $table->string('name');
            $table->string('link');
            $table->integer('order')->unsigned();
            $table->nullableTimestamps();

            $table->foreign('slide_set_id')
                ->references('id')
                ->on('slide_sets')
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
        Schema::drop('videos');
    }
}
