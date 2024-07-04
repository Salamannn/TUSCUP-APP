<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('sport_id')->nullable();
            $table->unsignedBigInteger('categories_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('categories_id')->references('id')->on('categoris');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
