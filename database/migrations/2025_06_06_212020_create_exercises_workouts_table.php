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
        Schema::create('exercises_workouts', function (Blueprint $table) {
            $table->bigInteger('exercises_id')->unsigned()->index();
            $table->foreign('exercises_id')->references('id')->on('exercises');

            $table->bigInteger('workouts_id')->unsigned()->index();
            $table->foreign('workouts_id')->references('id')->on('workouts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises_workouts');
    }
};
