<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('description', 100)->nullable();
            $table->string('budget', 100)->nullable();
            $table->string('stage', 100)->nullable();
            $table->boolean('is_won', 100)->nullable();
            $table->boolean('is_disabled')->nullable();
            $table->string('customer_id', 100)->nullable();
            // $table->string('user_id', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
}
