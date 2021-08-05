<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->bigIncrements('room_id');
            $table->string('room_type', 40);
            $table->string('room_price', 40);
            $table->string('room_no', 40);
            $table->string('room_detail', 40);
            $table->string('room_status', 40);
            $table->string('repair_room', 40);
            $table->string('creating_date', 40);
            $table->unsignedBigInteger('hotel_id');
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
        Schema::dropIfExists('room');
    }
}
