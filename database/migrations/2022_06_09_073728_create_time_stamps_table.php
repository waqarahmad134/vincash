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
        Schema::create('time_stamps', function (Blueprint $table) {
            $table->id();
            $table->datetime('assign_dealer')->nullable();
            $table->datetime('buy_vehicle')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->timestamps();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_stamps');
    }
};
