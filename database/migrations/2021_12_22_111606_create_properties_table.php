<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('house');
            $table->string('street');
            $table->string('tourist');
            $table->string('hospital');
            $table->string('bank');
            $table->string('shopping');
            $table->string('resturant');
            $table->dateTime('datetime');
            $table->date('date');
            $table->string('month');
            $table->string('week');
            $table->time('time');

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
        Schema::dropIfExists('properties');
    }
}
