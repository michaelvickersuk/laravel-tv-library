<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_genres', function (Blueprint $table) {
            $table->unsignedBigInteger('show_id');
            $table->unsignedBigInteger('genre_id');
            $table->primary(['show_id', 'genre_id']);
            $table->foreign('show_id')->references('id')->on('shows')->cascadeOnDelete();
            $table->foreign('genre_id')->references('id')->on('genres')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('show_genres');
    }
}
