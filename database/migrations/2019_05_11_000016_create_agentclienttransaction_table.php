<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentClientTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('agentclienttransaction');
        Schema::create('agentclienttransaction', function (Blueprint $table) {
	    $table->bigIncrements('transaction_id');
            $table->integer('client_id');
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
        Schema::dropIfExists('agentclienttransaction');
    }
}
