<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonsTable extends Migration
{
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('show_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('show_id')->references('id')->on('shows')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seasons');
    }
}
