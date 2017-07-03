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



    Schema::create('categories', function(Blueprint $table){
      $table->increments('id');
      $table->string('name', 50);
      $table->string('description', 100);
      $table->string('slug', 50);
      $table->integer('parent_id');
      $table->timestamps();
    });
    Schema::create('courses', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 100);
			$table->string('slug', 100);
			$table->text('description');
			$table->float('price');
      $table->timestamps();
		});
    Schema::create('category_course', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('category_id')->unsigned()->nullable();
      $table->foreign('category_id')->references('id')
            ->on('categories')->onDelete('cascade');
      $table->integer('course_id')->unsigned()->nullable();
      $table->foreign('course_id')->references('id')
            ->on('courses')->onDelete('cascade');
      $table->timestamps();
    });
		Schema::create('course_user', function(Blueprint $table)
    {
        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')
              ->on('users')->onDelete('cascade');

        $table->integer('course_id')->unsigned()->nullable();
        $table->foreign('course_id')->references('id')
              ->on('courses')->onDelete('cascade');

        $table->timestamps();
    });

		Schema::create('sections', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 100);
			$table->text('description');
      $table->string('slug', 100);
			$table->integer('course_id');
      $table->timestamps();
		});
		Schema::create('lessons', function(Blueprint $table){
			$table->increments('id');
			$table->integer('section_id');
      $table->string('name');
      $table->string('slug');
			$table->text('description');
			$table->text('video_code');
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
        Schema::dropIfExists('users_courses');
        Schema::dropIfExists('sections');
        Schema::dropIfExists('lessons');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('category_course');
    }
}
