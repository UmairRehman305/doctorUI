<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_info', function (Blueprint $table) {
            $table->increments('formID');
            $table->integer('userID');
            $table->string('cTitle');
            $table->string('cProvider');
            $table->string('cFormat');
            $table->string('cGrantProvider');
            $table->string('cContent');
            $table->string('cStatus');
            $table->datetime('cDate');
            $table->integer('cCreditHour');
            $table->string('cCertificate');
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
        Schema::dropIfExists('course_info');
    }
}
