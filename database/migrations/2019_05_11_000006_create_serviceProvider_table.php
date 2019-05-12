<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	//Schema::dropIfExists('serviceProvider');
        Schema::create('serviceProvider', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
	    $table->integer('contact_number');
            $table->string('email',150)->unique();
	    $table->string('address');
	    $table->string('service_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceProvider');
    }
}
