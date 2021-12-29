<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_tests', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('course_id');
            $table->integer('question_id');
            $table->string('question');
            $table->string('choose_1');
            $table->string('choose_2');
            $table->string('choose_3');
            $table->string('choose_4');
            $table->string('answer');
            $table->integer('point');
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
        Schema::dropIfExists('course_tests');
    }
}
