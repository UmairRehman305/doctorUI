<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormCertificate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_certificate', function (Blueprint $table) {
            $table->string('formId');
            $table->foreignId('userId')->reference('id')-> on ('users');
            $table->string('course_name');
            $table->string('institute_name');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->text('certificate_url');
            $table->binary('certificateImage');
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
        Schema::dropIfExists('form_certificate');
    }
}
