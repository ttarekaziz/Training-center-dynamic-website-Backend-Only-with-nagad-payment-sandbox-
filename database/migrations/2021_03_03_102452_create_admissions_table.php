<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('status');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->integer('national_id');
            $table->string('dob');
            $table->string('blood');
            $table->string('gender');
            $table->integer('yop1')->nullable();
            $table->integer('yop2')->nullable();
            $table->integer('yop3')->nullable();
            $table->integer('yop4')->nullable();
            $table->text('degree1')->nullable();
            $table->text('degree2')->nullable();
            $table->text('degree3')->nullable();
            $table->text('degree4')->nullable();
            $table->text('subject1')->nullable();
            $table->text('subject2')->nullable();
            $table->text('subject3')->nullable();
            $table->text('subject4')->nullable();
            $table->text('bou1')->nullable();
            $table->text('bou2')->nullable();
            $table->text('bou3')->nullable();
            $table->text('bou4')->nullable();
            $table->text('course_name');
            $table->string('course_duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
