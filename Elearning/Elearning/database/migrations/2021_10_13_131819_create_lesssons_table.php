<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLesssonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesssons', function (Blueprint $table) {
            $table->string('course_id');
            $table->string('subject_id');
            $table->string('lesson_name');
            $table->string('video');
            $table->string('lesson_test')->nullable();
            $table->string('slug')->primary();
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
        Schema::dropIfExists('lesssons');
    }
}
