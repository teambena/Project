<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('movie_id');
            $table->string('movie_name');
            $table->string('image');
            $table->string('language');
            $table->string('description');
            $table->integer('price');
            $table->timestamps();
            $table->integer('id')->default(1)->autoincrement();

        });

        Schema::table('movies', function($table) {
            $table->primary('movie_id')->autoIncrement();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
