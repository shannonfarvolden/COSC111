<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_set_id')->unsigned();
            $table->integer('slide_number')->unsigned();
            $table->string('image_path');
            $table->string('thumbnail_path');
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
        Schema::drop('slides');
    }
}
