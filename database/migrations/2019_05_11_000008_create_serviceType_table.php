<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::dropIfExists('serviceType');
        Schema::create('serviceType', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->string('name');
	    $table->integer('service_rate');
	    $table->integer('provider_id');
	    $table->integer('quantity');
	    $table->date('arrival_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceType');
    }
}
