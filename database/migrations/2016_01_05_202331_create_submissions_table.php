<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('due_date');
            $table->integer('total')->unsigned();
            $table->string('category');
            $table->boolean('bonus')->default(false);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });

        Schema::create('submission_user', function(Blueprint $table){

            $table->integer('user_id')->unsigned()->index();
            $table->integer('submission_id')->unsigned()->index();
            $table->string('file_name');
            $table->string('file_path');
            $table->text('comments')->nullable();
            $table->integer('attempt')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign('user_id')
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
        Schema::drop('submission_user');
        Schema::drop('submissions');
    }
}
