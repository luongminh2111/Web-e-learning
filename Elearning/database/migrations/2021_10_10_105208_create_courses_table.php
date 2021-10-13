<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('course_id');
            $table->string('course_name');
            $table->string('subject_id');
            $table->string('video')->nullable();
            $table->string('test')->nullable();
            $table->string('description')->nullable();
            $table->string('requirements')->nullable();
            $table->string('outcomes')->nullable();
            $table->string('des_image')->nullable();
            $table->string('slug')->primary();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.

     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
