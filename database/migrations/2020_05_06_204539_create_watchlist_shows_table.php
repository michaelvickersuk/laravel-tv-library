<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchlistShowsTable extends Migration
{
    public function up()
    {
        Schema::create('watchlist_shows', function (Blueprint $table) {
            $table->unsignedBigInteger('watchlist_id');
            $table->unsignedBigInteger('show_id');
            $table->primary(['watchlist_id', 'show_id']);
            $table->foreign('watchlist_id')->references('id')->on('watchlists')->cascadeOnDelete();
            $table->foreign('show_id')->references('id')->on('shows')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('watchlist_episodes');
    }
}
