<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('eventservice');
        Schema::create('eventservice', function (Blueprint $table) {
            $table->integer('event_id');
	    $table->integer('provider_id');
	    $table->integer('agent_id');
	    $table->integer('expences');
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
        Schema::dropIfExists('eventservice');
    }
}
