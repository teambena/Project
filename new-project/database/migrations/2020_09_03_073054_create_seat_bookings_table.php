<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_bookings', function (Blueprint $table) {
            $table->integer('booking_id');
            $table->integer('seat_id');
            $table->integer('theater_id');
            $table->time('book_time');

        });

        Schema::table('seat_bookings', function($table) {
            $table->primary('booking_id')->autoIncrement();
            $table->foreign('seat_id', 'seat_booking_fk1')->references('seat_id')->on('seats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('theater_id', 'seat_booking_fk2')->references('theater_id')->on('theaters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seat_bookings');
    }
}
