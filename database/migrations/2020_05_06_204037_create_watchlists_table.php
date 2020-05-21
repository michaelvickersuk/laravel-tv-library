<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchlistsTable extends Migration
{
    public function up()
    {
        Schema::create('watchlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->unique();
            $table->boolean('private');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('watchlists');
    }
}
