<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->integer('ticket_id');
            $table->integer('theater_id');
            $table->integer('movie_id');
            $table->integer('customer_id');
            $table->integer('seat_id');
            $table->integer('price');
            $table->date('date');

        });

        Schema::table('tickets', function($table) {
            $table->primary('ticket_id')->autoIncrement();
            $table->foreign('theater_id', 'tickets_fk1')->references('theater_id')->on('theaters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('movie_id', 'tickets_fk2')->references('movie_id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('customer_id', 'tickets_fk3')->references('customer_id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('seat_id', 'tickets_fk4')->references('seat_id')->on('seats')->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
