<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPersonalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_personal_info', function (Blueprint $table) {
            $table->string('formId');
            $table->foreignId('userId')->reference('id')-> on ('users');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('country');
            $table->string('provinceOrState');
            $table->string('city');
            $table->binary('profileImage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_personal_info');
    }
}
