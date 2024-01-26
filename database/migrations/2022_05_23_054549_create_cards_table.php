<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('card_no')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('security_code')->nullable();
            $table->string('amount')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();;
            $table->unsignedBigInteger('dealer_id')->nullable();;
            $table->timestamps();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('dealer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
