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
            $table->id();
            
            $table->string('title');
            $table->string('year');

            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');

            $table->string('description');
            $table->longtext('plot');
            $table->string('poster');

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
        Schema::dropIfExists('movies');
    }
}
