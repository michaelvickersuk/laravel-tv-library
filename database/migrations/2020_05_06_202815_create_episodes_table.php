<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('season_id');
            $table->string('name');
            $table->timestamp('aired')->nullable();
            $table->unsignedBigInteger('plays')->nullable()->index();
            $table->timestamps();

            $table->foreign('season_id')->references('id')->on('seasons')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
