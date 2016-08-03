<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('slide_set')->unsigned();
            $table->integer('lecture')->unsigned();
            $table->string('topic')->nullable();
            $table->integer('slide_number')->unsigned();
            $table->string('image_path');
            $table->string('thumbnail_path');
            $table->nullableTimestamps();
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
