<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateagentserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('agentservice');
        Schema::create('agentservice', function (Blueprint $table) {
            $table->integer('agent_id');
	    $table->integer('provider_id');
	    $table->integer('event_id');
	    $table->integer('service_id');
	    $table->integer('quantity');
	    $table->integer('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentservice');
    }
}
