<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('default_address')->nullable();
            $table->string('phone_area_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('identification_type')->nullable();
            $table->string('identification_number')->nullable();
            $table->string('address_id')->nullable();
            $table->string('address_zipcode')->nullable();
            $table->string('address_street_name')->nullable();
            $table->string('address_street_number')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('description')->nullable();
            $table->string('metadata')->nullable();
            $table->string('default_card')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
