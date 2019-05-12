<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('deliveryForm');
        Schema::create('deliveryForm', function (Blueprint $table) {
            $table->bigIncrements('id');
	    $table->integer('event_id');
	    $table->integer('provider_id');
	    $table->integer('employee_id');
            $table->string('email',150)->unique();
	    $table->string('address');
	    $table->string('delivery_type');
	    $table->integer('amount');
	    $table->date('delivery_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveryForm');
    }
}
