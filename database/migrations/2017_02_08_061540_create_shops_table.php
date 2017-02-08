<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->integer('user_id');
            $table->string('name');
            $table->integer('category_id');
            $table->string('street');
            $table->string('outside_number');
            $table->string('inside_number');
            $table->string('postal_code');
            $table->string('phone');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('status');
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
        Schema::drop('shops');
    }
}
