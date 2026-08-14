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
        Schema::create('training_outline_items', function (Blueprint $table) {
            $table->id();
            $table->integer('training_id');
            $table->string('item_small_title');
            $table->string('item_title');
            $table->text('item_text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_outline_items');
    }
};
