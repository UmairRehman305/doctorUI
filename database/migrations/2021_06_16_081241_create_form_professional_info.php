<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormProfessionalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_professional_info', function (Blueprint $table) {
            $table->string('formId');
            $table->foreignId('userId')->reference('id')-> on ('users');
            $table->string('Title');
            $table->string('hospital');
            $table->boolean('status');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->text('description');
            $table->datetime('certificate_url');
            $table->binary('professional_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_professional_info');
    }
}
