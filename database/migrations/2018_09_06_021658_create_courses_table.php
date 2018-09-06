<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->unsignedInteger('level_id');
            $table->foreign('level_id')->references('id')->on('levels');

            $table->string('name');
            $table->text('description');
            $table->string('picture');
            $table->string('webside');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
