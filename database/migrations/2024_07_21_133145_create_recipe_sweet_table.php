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
        Schema::create('recipe_sweet', function (Blueprint $table) {
            $table->id();
          
          $table->unsignedBigInteger('recipe_id');
          $table->foreign('recipe_id')->references('id')->on('recipes');
          
          $table->unsignedBigInteger('sweet_id');
          $table->foreign('sweet_id')->references('id')->on('sweets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_sweet');
    }
};
