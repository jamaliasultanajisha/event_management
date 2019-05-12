<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('agentsponsor');
        Schema::create('agentsponsor', function (Blueprint $table) {
            $table->integer('agent_id');
	    $table->integer('sponsor_id');
	    $table->integer('revenue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentsponsor');
    }
}
