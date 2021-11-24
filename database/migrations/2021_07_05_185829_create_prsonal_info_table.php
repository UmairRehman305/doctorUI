<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrsonalInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prsonal_info', function (Blueprint $table) {
            $table->increments('formID');
            $table->integer('userID');
            $table->string('userName');
            $table->string('qualification');
            $table->string('country');
            $table->string('countryIDNumber');
            $table->string('medicalParacticeLicense_number');
            $table->string('InstitueorClinicName');
            $table->string('InstitutrOrCityName');
            $table->string('spacialityArea');
            $table->string('intrestArea');
            $table->string('phoneOrEmail');
            $table->datetime('birthdate');
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
        Schema::dropIfExists('prsonal_info');
    }
}
