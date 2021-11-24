<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_info', function (Blueprint $table) {
            $table->increments('formID');
            $table->integer('userID');
            $table->string('pTitle');
            $table->string('pPublication');
            $table->string('pFormat');
            $table->string('pGrantProvider');
            $table->string('pContent');
            $table->string('pStatus');
            $table->datetime('pDate');
            $table->integer('pCreditHour');
            $table->string('pCertificate');
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
        Schema::dropIfExists('publication_info');
    }
}
