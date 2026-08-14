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
        Schema::create('training_price_details', function (Blueprint $table) {
            $table->id();
            $table->integer('training_id');
            $table->string('price_category');
            $table->string('price_early_bird');
            $table->string('price_text_early_bird');
            $table->string('price_reguler');
            $table->string('price_text_reguler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_price_details');
    }
};
