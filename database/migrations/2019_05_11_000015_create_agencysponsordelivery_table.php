<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencySponsorDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('agencysponsordelivery');
        Schema::create('agencysponsordelivery', function (Blueprint $table) {
	    $table->bigIncrements('transaction_id');
            $table->integer('sponsor_id');
	    $table->integer('agent_id');
	    $table->integer('event_id');
	    $table->integer('amount');
	    $table->string('status');
	    $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencysponsordelivery');
    }
}
