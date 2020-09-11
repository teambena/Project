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
            $table->string('director');
            $table->string('language');
            $table->string('popularity');
            $table->time('screentime');

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
