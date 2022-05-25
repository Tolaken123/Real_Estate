<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rentalprice');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('floor');
            $table->string('landsize');
            $table->string('dimension');
            $table->string('houseno');
            $table->string('street');
            $table->string('maplocation');
            $table->longText('description');
            $table->unsignedBigInteger("image_id");
            $table->foreign('image_id')->references('id')->on('images')->caseOnDelete();
            // $table->unsignedBigInteger("inventery_id")->nullable();
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
        Schema::dropIfExists('rents');
    }
}
