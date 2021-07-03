<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormQualification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_qualification', function (Blueprint $table) {
            $table->string('id');
            $table->foreignId('userId')->reference('id')-> on ('users');
            $table->string('qualification_title');
            $table->string('institute_name');         
            $table->string('specialization');
            $table->text('license_number');
            $table->text('description');
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
        Schema::dropIfExists('form_qualification');
    }
}
