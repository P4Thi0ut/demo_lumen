<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('phone_number', 100)->nullable();
            $table->string('account_name', 100)->nullable();
            $table->string('activity_sector', 255)->nullable();
            $table->string('legal_identifier', 255)->nullable();
            $table->string('nb_employees', 100)->nullable();
            $table->string('headquarters_adress', 100)->nullable();
            $table->string('billing_adress', 100)->nullable();
            $table->boolean('is_disabled')->nullable();
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
