<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('sponsor');
        Schema::create('sponsor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
	    $table->string('sponsor_type');
	    $table->integer('contact_number');
            $table->string('company_name');
	    $table->integer('company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsor');
    }
}
