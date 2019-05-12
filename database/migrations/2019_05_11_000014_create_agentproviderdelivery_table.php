<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentProviderDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('agentproviderdelivery');
        Schema::create('agentproviderdelivery', function (Blueprint $table) {
	    $table->bigIncrements('transaction_id');
            $table->integer('service_id');
	    $table->integer('provider_id');
	    $table->integer('agent_id');
	    $table->integer('event_id');
	    $table->integer('service_unit');
	    $table->integer('expences');
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
        Schema::dropIfExists('agentproviderdelivery');
    }
}
