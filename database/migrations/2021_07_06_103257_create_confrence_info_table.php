<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfrenceInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confrence_info', function (Blueprint $table) {
            $table->increments('formID');
            $table->integer('userID');
            $table->string('cfTitle');
            $table->string('cfProvider');
            $table->string('cfFormat');
            $table->string('cfGrantForAttend');
            $table->string('cfContent');
            $table->string('cfStatus');
            $table->datetime('cfDate');
            $table->integer('cfCreditHOur');
            $table->string('cfCertificate');
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
        Schema::dropIfExists('confrence_info');
    }
}
