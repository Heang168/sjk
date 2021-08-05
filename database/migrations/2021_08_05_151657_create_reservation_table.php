<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('reservation_id');
            $table->string('check_in', 40);
            $table->string('check_out', 40);
            $table->integer('guest_amount');
            $table->integer('days_range');
            $table->string('revervation_status', 40);
            $table->string('total_price', 40);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('promocode_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('promocode_id')->references('promocode_id')->on('promocode');
            $table->foreign('room_id')->references('room_id')->on('room');
            $table->foreign('hotel_id')->references('hotel_id')->on('hotel');

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
        Schema::dropIfExists('reservation');
    }
}
