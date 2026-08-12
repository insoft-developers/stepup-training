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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('small_title');
            $table->string('title_text');
            $table->string('about_text');
            $table->string('item_title_1');
            $table->string('item_subtitle_1')->nullable();
            $table->string('item_title_2');
            $table->string('item_subtitle_2')->nullable();
            $table->string('cta_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
